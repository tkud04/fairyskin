const addClass = (elem,name) => {
	let el = document.querySelector(elem);
	
	if(el){
	 el.classList.add(name);
	}
	
}

const removeClass = (elem,name) => {
	let el = document.querySelector(elem);
	
	if(el){
	 el.classList.remove(name);
	}
	
}

const showElem = (name) => {
	let names = [];
	
	if(Array.isArray(name)){
	  names = name;
	}
	else{
		names.push(name);
	}
	
	for(let i = 0; i < names.length; i++){
		removeClass(names[i],"hidden");
	    addClass(names[i],"visible");
	}
}

const hideElem = (name) => {
	let names = [];
	
	if(Array.isArray(name)){
	  names = name;
	}
	else{
		names.push(name);
	}
	
	for(let i = 0; i < names.length; i++){
		removeClass(names[i],"visible");
    	addClass(names[i],"hidden");
	}
	
}

const displayError = (title) => {
    Swal.fire({
        icon: 'error',
        title
    })
}