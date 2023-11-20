import{m as _,o as p,g as f,w as l,a as t,d as b,u as o,H as g,b as s,n as y,q as h,p as x,e as v}from"./app.b84fa571.js";import{_ as k}from"./Button.d619a967.js";import{X as V,_ as w}from"./AdminBase.2e55759f.js";import{_ as C,a as i,b as n}from"./ValidationErrors.80843bce.js";import{_ as B}from"./NavLink.cc478f1e.js";import"./TopMenu.ac78b15f.js";import"./AppLogoXeniaWeb.a6ce58de.js";const m=d=>(x("data-v-ac409e29"),d=d(),v(),d),S=m(()=>s("div",{class:"-z-50 h-full w-screen bg-gray-500 bg-dashboard bg-left-top bg-no-repeat fixed"},null,-1)),A=m(()=>s("h2",{class:"font-bold text-2xl md:text-xl text-zinc-700 leading-tight"}," New Category ",-1)),$=["onSubmit"],I={class:"mt-4"},N={class:"mt-4"},q={class:"flex items-center mt-4"},z=m(()=>s("span",{class:"text-green-600 group-hover:text-green-100"}," Save ",-1)),U={__name:"AddCategory",setup(d){const e=_({title:"",key:"",comment:""}),c=()=>{e.post(route("admin.categories.store"),{onFinish:()=>e.reset("title","key","comment")})};return(u,a)=>(p(),f(V,null,{page_background:l(()=>[S]),header:l(()=>[A]),rightBlock:l(()=>[t(w,{href:u.route("admin.technologies.index"),class:"bg-gray-50 border-b-3 border-b-gray-200 ml-auto"},{default:l(()=>[b(" Back to List ")]),_:1},8,["href"])]),default:l(()=>[t(o(g),{title:"Add "}),t(C,{class:"mb-4"}),s("form",{onSubmit:h(c,["prevent"])},[s("div",null,[t(i,{for:"title",value:"Title"}),t(n,{id:"title",type:"text",class:"mt-1 block w-full",modelValue:o(e).title,"onUpdate:modelValue":a[0]||(a[0]=r=>o(e).title=r),required:"",autofocus:"",autocomplete:"title"},null,8,["modelValue"])]),s("div",I,[t(i,{for:"key",value:"Key"}),t(n,{id:"key",type:"text",class:"mt-1 block w-full",modelValue:o(e).key,"onUpdate:modelValue":a[1]||(a[1]=r=>o(e).key=r),required:"",autocomplete:"key"},null,8,["modelValue"])]),s("div",N,[t(i,{for:"comment",value:"Comment"}),t(n,{id:"comment",type:"text",class:"mt-1 block w-full",modelValue:o(e).comment,"onUpdate:modelValue":a[2]||(a[2]=r=>o(e).comment=r),autocomplete:"comment"},null,8,["modelValue"])]),s("div",q,[t(k,{class:y(["group border border-green-600 border-b-4 border-b-green-500 hover:border-b-green-500 hover:bg-green-600 bg-white",{"opacity-25":o(e).processing}]),disabled:o(e).processing},{default:l(()=>[z]),_:1},8,["class","disabled"])])],40,$)]),_:1}))}},j=B(U,[["__scopeId","data-v-ac409e29"]]);export{j as default};