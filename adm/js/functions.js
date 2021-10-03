function menuJump(element){
	alert('asda');
    var acc="?"+element.name+"="+element.options[element.selectedIndex].value;
    self.location.href=acc;
}