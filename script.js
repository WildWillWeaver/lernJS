function a()
{ 
}
//  return b.apply(null,arguments);
a.met=function (a,b){
    return this.a+this.b;}
user={
a:5,
b:3
}
var c={};
 var b=Object.create(a);
//b.__proto__=a;
alert((b.prototype));