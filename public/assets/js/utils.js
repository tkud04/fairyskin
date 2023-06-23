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

const displaySuccess = (title) => {
    Swal.fire({
        icon: 'success',
        title
    })
}

const displayInfo = (title) => {
    Swal.fire({
        icon: 'info',
        title
    })
}

const displayError = (title) => {
    Swal.fire({
        icon: 'error',
        title
    })
}

const requestClan = (req,okCallback,errorCallback) => {
	//fetch request
	fetch(req)
	   .then(response => {
		   if(response.status === 200){
			   //console.log(response);
			   
			   return response.json()
		   }
		   else{
			   return {status: response.status,  message: "Failed to fetch"}
		   }
	   })
	   .catch(error => {
		    displayError("Failed to process request: " + error);			
	   })
	   .then(res => {
		   console.log('API response: ',res)
          	 
		   if(res.status === "ok"){
              typeof okCallback === 'function' && okCallback()
		   }
		   else{
			typeof errorCallback === 'function' && errorCallback()    					 
		   }
	   }).catch(error => {
		    alert("Failed to fetch: " + error);			
	   });
}