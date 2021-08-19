angular.module('mainApp.filter',[])

.filter('mname' , function(){

return function (mnumber){
var mnames = ['January','February','March','April','May','June','July','August','September','October','November','December'];
return mnames[mnumber-1];
}
});