import{m as u,h as f,o as a,g as _,w as s,a as i,u as e,H as p,c as g,f as h,b as o,d as n,n as y,L as b,q as v}from"./app.b84fa571.js";import{_ as k}from"./Button.d619a967.js";import{_ as x}from"./Guest.b9cb2090.js";import"./AppLogoXeniaWeb.a6ce58de.js";const w=o("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},B=["onSubmit"],E={class:"mt-4 flex items-center justify-between"},H={__name:"VerifyEmail",props:{status:String},setup(r){const c=r,t=u(),d=()=>{t.post(route("verification.send"))},l=f(()=>c.status==="verification-link-sent");return(m,L)=>(a(),_(x,null,{default:s(()=>[i(e(p),{title:"Email Verification"}),w,e(l)?(a(),g("div",V," A new verification link has been sent to the email address you provided during registration. ")):h("",!0),o("form",{onSubmit:v(d,["prevent"])},[o("div",E,[i(k,{class:y({"opacity-25":e(t).processing}),disabled:e(t).processing},{default:s(()=>[n(" Resend Verification Email ")]),_:1},8,["class","disabled"]),i(e(b),{href:m.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:s(()=>[n("Log Out")]),_:1},8,["href"])])],40,B)]),_:1}))}};export{H as default};
