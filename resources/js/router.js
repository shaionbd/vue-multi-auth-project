import LandingPage from './components/LandingPage'
import AdminLogin from './components/admin/auth/Login'
import AdminForgotPassword from './components/admin/auth/ForgotPassword'
import AdminNewPassword from './components/admin/auth/ChangePassword'
// admin main pages
import AdminMain from './components/admin/Main'
import AdminDashboard from './components/admin/pages/Dashboard'
import AdminCertificate from './components/admin/pages/Certificate'
import AdminCourse from './components/admin/pages/Course'
import AdminStudent from './components/admin/pages/Student'
import AdminSupport from './components/admin/pages/Support'
import AdminTeacher from './components/admin/pages/Teacher'

import StudentLogin from './components/student/auth/Login'
import StudentSignup from './components/student/auth/Signup'
import StudentActivateAccount from './components/student/auth/ActivateAccount'
import StudentForgotPassword from './components/student/auth/ForgotPassword'
import StudentNewPassword from './components/student/auth/ChangePassword'
// student main pages
import StudentMain from './components/student/Main'
import StudentSetting from './components/student/pages/Setting'
import StudentActiveCourse from './components/student/pages/ActiveCourses'
import StudentCertificate from './components/student/pages/Certificate'
import StudentCommunity from './components/student/pages/Community'
import StudentCommunityAll from './components/student/pages/CommunityAll'
import StudentCourses from './components/student/pages/Courses'
import StudentCourse from './components/student/pages/Course'
import StudentCourseSingle from './components/student/pages/CourseSingle'
import StudentDashboard from './components/student/pages/Dashboard'
import StudentInvoice from './components/student/pages/Invoice'
import StudentJobDegree from './components/student/pages/JobDegree'
import StudentLesson from './components/student/pages/Lesson'
import StudentProfile from './components/student/pages/Profile'
import StudentReferral from './components/student/pages/Referral'
import StudentSupport from './components/student/pages/Support'

import TeacherLogin from './components/teacher/auth/Login'
import TeacherSignup from './components/teacher/auth/Signup'
import TeacherActivateAccount from './components/teacher/auth/ActivateAccount'
import TeacherForgotPassword from './components/teacher/auth/ForgotPassword'
import TeacherNewPassword from './components/teacher/auth/ChangePassword'
// Teacher main pages
import TeacherMain from './components/teacher/Main'
import TeacherSetting from './components/teacher/pages/Setting'
import TeacherActiveCourse from './components/teacher/pages/ActiveCourses'
import TeacherCertificate from './components/teacher/pages/Certificate'
import TeacherCommunity from './components/teacher/pages/Community'
import TeacherCommunityAll from './components/teacher/pages/CommunityAll'
import TeacherCourses from './components/teacher/pages/Courses'
import TeacherCourse from './components/teacher/pages/Course'
import TeacherCourseSingle from './components/teacher/pages/CourseSingle'
import TeacherDashboard from './components/teacher/pages/Dashboard'
import TeacherInvoice from './components/teacher/pages/Invoice'
import TeacherLesson from './components/teacher/pages/Lesson'
import TeacherProfile from './components/teacher/pages/Profile'
import TeacherReferral from './components/teacher/pages/Referral'
import TeacherSupport from './components/teacher/pages/Support'

export const routes = [
	{
		path: '/',
		component: LandingPage
	},
	{
		path: '/admin/login',
		component: AdminLogin
	},
	{
		path: '/admin/forgot/password',
		component: AdminForgotPassword
	},
	{
		path: '/admin/new/password',
		component: AdminNewPassword
	},
	{
		path: '/admin',
		component: AdminMain,
		meta: {
			requiresAuth: true 
		},
		children: [
            {
                path: '/',
                component: AdminDashboard
            },
            {
                path: 'students',
                component: AdminStudent
            },
            {
                path: 'teachers',
                component: AdminTeacher
            },
            {
                path: 'courses',
                component: AdminCourse
            },
            {
                path: 'certificates',
                component: AdminCertificate
            },
            {
                path: 'support',
                component: AdminSupport
            }
        ]
	},
	{
		path: '/student/login',
		component: StudentLogin
	},
	{
		path: '/student/signup',
		component: StudentSignup
	},
	{
		path: '/student/account/activate',
		component: StudentActivateAccount
	},
	{
		path: '/student/forgot/password',
		component: StudentForgotPassword
	},
	{
		path: '/student/new/password',
		component: StudentNewPassword
	},
	{
		path: '/student',
		component: StudentMain,
		meta: {
			requiresAuth: true 
		},
		children: [
            {
                path: '/',
                component: StudentDashboard
            },
            {
                path: 'setting',
                component: StudentSetting
            },
            {
                path: 'profile',
                component: StudentProfile
            },
            {
                path: 'communities',
                component: StudentCommunityAll
            },
            {
                path: 'certificates',
                component: StudentCertificate
            },
            {
                path: 'courses',
                component: StudentCourses
            },
            {
                path: 'course',
                component: StudentCourse
            },
            {
                path: 'communities',
                component: StudentCommunityAll
            },
            {
                path: 'community',
                component: StudentCommunity
            },
            {
                path: 'invoice',
                component: StudentInvoice
            },
            {
                path: 'job/degree',
                component: StudentJobDegree
            },
            {
                path: 'referral',
                component: StudentReferral
            },
            {
                path: 'support',
                component: StudentSupport
            }
        ]
	},
	{
		path: '/teacher/login',
		component: TeacherLogin
	},
	{
		path: '/teacher/signup',
		component: TeacherSignup
	},
	{
		path: '/teacher/account/activate',
		component: TeacherActivateAccount
	},
	{
		path: '/teacher/forgot/password',
		component: TeacherForgotPassword
	},
	{
		path: '/teacher/new/password',
		component: TeacherNewPassword
	},
	{
		path: '/teacher',
		component: TeacherMain,
		meta: {
			requiresAuth: true 
		},
		children: [
            {
                path: '/',
                component: TeacherDashboard
            },
            {
                path: 'setting',
                component: TeacherSetting
            },
            {
                path: 'profile',
                component: TeacherProfile
            },
            {
                path: 'communities',
                component: TeacherCommunityAll
            },
            {
                path: 'certificates',
                component: TeacherCertificate
            },
            {
                path: 'courses',
                component: TeacherCourses
            },
            {
                path: 'course',
                component: TeacherCourse
            },
            {
                path: 'communities',
                component: TeacherCommunityAll
            },
            {
                path: 'community',
                component: TeacherCommunity
            },
            {
                path: 'invoice',
                component: TeacherInvoice
            },
            {
                path: 'referral',
                component: TeacherReferral
            },
            {
                path: 'support',
                component: TeacherSupport
            }
        ]
	}

]