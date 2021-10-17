import Vue from 'vue'
import Router from 'vue-router'
import homepage from '@/components/public/homepage'
import signuppage from '@/components/public/auth/signuppage'
import signinpage from '@/components/public/auth/signin'
import tourlist from '@/components/public/tour/list'
import tourdetail from '@/components/public/tour/detail'
import book from '@/components/public/book/personal'
import payment from '@/components/public/book/payment'
import confirm from '@/components/public/book/confirm'
import mytour from '@/components/public/tour/mytour'
import profile from '@/components/public/auth/profile'
import contact from '@/components/public/auth/contact'
import listreview from '@/components/public/review/list'
import detailreview from '@/components/public/review/detail'
import NotFoundComponent from '@/components/errors/NotFoundComponent'
import CreateComponent from '@/components/public/review/CreateComponent'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '*',
      name: 'notFound',
      component: NotFoundComponent
    },
    {
      path: '/',
      name: 'homepage',
      component: homepage
    },
    {
      path: '/home',
      name: 'home',
      component: homepage
    },
    {
      path: '/signuppage',
      name: 'signuppage',
      component: signuppage
    },
    {
      path: '/signinpage',
      name: 'signinpage',
      component: signinpage
    },
    {
      path: '/tourlist',
      name: 'tourlist',
      component: tourlist
    },
    {
      path: '/tour/:tourSlug',
      name: 'tourdetail',
      component: tourdetail
    },
    {
      path: '/book',
      name: 'book',
      component: book
    },
    {
      path: '/payment',
      name: 'payment',
      component: payment
    },
    {
      path: '/confirm',
      name: 'confirm',
      component: confirm
    },
    {
      path: '/mytour',
      name: 'mytour',
      component: mytour
    },
    {
      path: '/profile',
      name: 'profile',
      component: profile
    },
    {
      path: '/contact',
      name: 'contact',
      component: contact
    },
    {
      path: '/listreview/:id',
      name: 'listreview',
      component: listreview
    },
    {
      path: '/detailreview/:id',
      name: 'detailreview',
      component: detailreview
    },
    {
      path: '/review-create',
      name: 'reviewCreate',
      component: CreateComponent
    }
  ]
})
