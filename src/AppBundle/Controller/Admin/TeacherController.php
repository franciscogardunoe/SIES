<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackendBundle\Entity\User;
use AppBundle\Form\TeacherType;
use BackendBundle\Entity\Userteacher;
use AppBundle\Form\UserteacherType;

class TeacherController extends Controller {

    public function teacherAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $qb1 = $em->createQueryBuilder();
        $qb1->select('u,p,t')
                ->from('BackendBundle:User', 'u')
                ->innerJoin('BackendBundle:Userteacher', 'ut', 'WITH', 'ut.user = u.id')
                ->innerJoin('BackendBundle:Profession', 'p', 'WITH', 'ut.profession = p.id')
                ->innerJoin('BackendBundle:Typeteacher', 't', 'WITH', 'ut.type = t.id')
                ->where("u.status=1")
                ->orderBy('u.lastname', 'ASC')
                ->orderBy('u.secondsurname', 'ASC')
                ->orderBy('u.name', 'ASC');
        $query1 = $qb1->getQuery();
        $listTeachers = $query1->getScalarResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $listTeachers, $request->query->getInt('page', 1), 5);
        $teacher = new User();
        $form = $this->createForm(TeacherType::class, $teacher);
        $form->handleRequest($request);
        $type = new Userteacher();
        $formType = $this->createForm(UserteacherType::class, $type);
        $formType->handleRequest($request);
        if ($form->isSubmitted()) {
//            $factory = $this->get("security.encoder_factory");
//            $encoder = $factory->getEncoder($teacher);
//            $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
//            $teacher->setPassword($password);
            $teacher->setPassword("123456789");
            $teacher->setPhoto("photo_female.png");
            $teacher->setStatus(1);
            $role = $em->getRepository("BackendBundle:Role")->find(2);
            $teacher->setRole($role);
            $em->persist($teacher);
            $em->flush();
            $type->setUser($teacher);
            $em->persist($type);
            $em->flush();
            $this->addFlash('success', "Registro de usuario correcto");
            return $this->redirect($this->generateUrl("app_admin_teacher"));
        }
        $this->addFlash('success', "Registro de usuario correcto");
        return $this->render("AppBundle:Admin:teachers.html.twig", array('teachers' => $pagination,
                    'formTeacher' => $form->createView(),
                    'formType' => $formType->createView(),
                    'flag' => 0));
    }

    public function deleteTeacherAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $idU = $this->get("nzo_url_encryptor")->decrypt($id);
        $user = $em->getRepository("BackendBundle:User")->find($idD);
        if ($user) {
            $em->remove($user);
            $em->flush();
            return $this->redirect($this->generateUrl("app_admin_teacher"));
        } else {
            return $this->redirect($this->generateUrl("app_admin_teacher"));
        }
    }

    public function updateTeacherAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $idD = $this->get("nzo_url_encryptor")->decrypt($id);
        $teacher = $em->getRepository("BackendBundle:User")->find($idD);
        $type = $em->getRepository("BackendBundle:Userteacher")->findOneBy(array('user' => $idD));
        $form = $this->createForm(TeacherType::class, $teacher);
        $form->handleRequest($request);
        $formType = $this->createForm(UserteacherType::class, $type);
        $formType->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->persist($teacher);
            $em->flush();
            //$type->setUser($teacher);
            $em->persist($type);
            $em->flush();
            $this->addFlash('success', "Registro de usuario correcto");
            return $this->redirect($this->generateUrl("app_admin_teacher"));
        }
        $qb1 = $em->createQueryBuilder();
        $qb1->select('u,p,t')
                ->from('BackendBundle:User', 'u')
                ->innerJoin('BackendBundle:Userteacher', 'ut', 'WITH', 'ut.user = u.id')
                ->innerJoin('BackendBundle:Profession', 'p', 'WITH', 'ut.profession = p.id')
                ->innerJoin('BackendBundle:Typeteacher', 't', 'WITH', 'ut.type = t.id')
                ->where("u.status=1")
                ->orderBy('u.lastname', 'ASC')
                ->orderBy('u.secondsurname', 'ASC')
                ->orderBy('u.name', 'ASC');
        $query1 = $qb1->getQuery();
        $listTeachers = $query1->getScalarResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $listTeachers, $request->query->getInt('page', 1), 5);
        return $this->render("AppBundle:Admin:teachers.html.twig", array('teachers' => $pagination,
                    'formTeacher' => $form->createView(),
                    'formType' => $formType->createView(),
                    'flag' => 1));
    }

}
