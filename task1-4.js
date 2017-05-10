function sequence(a,b){
  a===undefined?a=0:a=a;
  b===undefined?b=1:b=b;
  a-=b;
  return function(){
	  var ar=arguments[0]+arguments[arguments.length-1];
    return a+=b;
  }
}
function take(fun,x){
  var mas=[];
  for(var i=0;i<x;i++)
  mas[i]=fun();
  return mas;
}
function map(fun,arr){
  var ar1=[];
  for(var i=0;i<arr.length;i++)
  ar1[i]=fun(arr[i]);
  return ar1;
}
function fmap(a,b){

  return function bbc(){
    return a(b.apply(this,arguments));
  }
}
function add(){
  var sum=0;
	 for(var i=0;i<arguments.length;i++)sum+=arguments[i];
	 return sum;
//	 return a+b;
  }

function sq(a){return a*a;}
 var a=[1,22,3,4,7];
 var gen=sequence(1,1);
 var sqGen=fmap(sq,gen);
 var sqAdd=fmap(sq,add);
 
//alert(gen());
//alert(gen());
//alert(take(gen,5));
// alert(map(sq,a));
//alert(fmap(sq,gen)());
alert(fmap(sq,add)(2,4,1,1,1));
 
 
 
 
 
 
 
 
 
 
 
 
 