let BUUPlist = []

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

function BUUPAddRow(){	
	let str = `
	 <tr id="buup-${buupCounter}" style="margin-bottom: 20px; border-bottom: 1px solid #fff;">
	 <td>Will be generated</td>
	 <td><input type="text" placeholder="Product name" class="form-control pname"></td>
	   <td width="40%"><input type="text" placeholder="Product description" class="form-control desc"></td>
	   <td><input type="number"  placeholder="Price in NGN" class="form-control price"></td>
	   <td><input type="number"  placeholder="Stock" class="form-control stock"></td>
	   <td>
	     <select class="category" >
		 <option value="none">Select category</option>
		  ${categories.map(k => "<option value='" + k + "'>" + k.toUpperCase() + "</option>").join("")}
		 </select>
	   </td>
	   <td>
	    <select class="status" >
		<option value="none">Select status</option>
		 <option value="in_stock">In stock</option>
		 <option value="new">New</option>
		 <option value="out_of_stock">Out of stock</option>
		</select>
	   </td>
	   <td style="margin-top: 20px;">
	    <div>
		  <div id="buup-${buupCounter}-images-div" class="row">
	        <div class="col-md-6">
	         <input type="file" placeholder="Upload image"  data-ic="0" class="form-control images" onchange="readURL(this,'${buupCounter}')" name="buup-${buupCounter}-images[]">
		    </div>
			<div class="col-md-6">
			    <div class="row">
			      <div class="col-md-7">
	                <img id="buup-${buupCounter}-preview-0" src="#" alt="preview" style="width: 50px; height: 50px;"/>
			      </div>
			      <div class="col-md-5">
			        <input type="radio" name="buup-${buupCounter}-cover" value="0">
			      </div>
			    </div>
			  </div>
		  </div>
	    </div>
	   </td>
	   <td>
	   <button onclick="BUUPAddImage('${buupCounter}'); return false;" class="btn btn-primary">Add image</button>
	   <button onclick="BUUPRemoveRow('${buupCounter}'); return false;" class="btn btn-danger">Cancel</button>
	  
	   </td>
	 </tr>
	`;
	++buupCounter;
	$('#buup-table').append(str);
}

function BUUPRemoveRow(ctr){
	let r = $(`#buup-${ctr}`);
	console.log(r);
	r.remove();
	--buupCounter;
}

function readURL(input,ctr) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
		let pv = input.getAttribute("data-ic");
      $(`#buup-${ctr}-preview-${pv}`).attr({
	      'src': e.target.result,
	      'width': "50",
	      'height': "50"
	  });
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


function BUUPAddImage(ctr){
	let i = $(`#buup-${ctr}-images-div`), imgCount = $(`#buup-${ctr}-images-div input[type=file]`).length;
	console.log(imgCount);
	i.append(`<div class="col-md-6">
	          <input type="file" placeholder="Upload image" data-ic="${imgCount}" onchange="readURL(this,'${ctr}')" class="form-control images" name="buup-${ctr}-images[]">
			  </div>
			  <div class="col-md-6">
			    <div class="row">
			      <div class="col-md-7">
	                <img id="buup-${ctr}-preview-${imgCount}" src="#" alt="preview" style="width: 50px; height: 50px;"/>
			      </div>
			      <div class="col-md-5">
			        <input type="radio" name="buup-${ctr}-cover" value="${imgCount}">
			      </div>
			    </div>
			  </div>
	  `);
}

function BUUP(){
	hideElems('buup');
	console.log("BUUPlist length: ",buupCounter);
	
	
	if(buupCounter < 1){
		showSelectError('buup','product');
	}
	else{
	ret = [], hasUnfilledQty = false; err = [];

	for(let i = 0; i < buupCounter; i++){
		let BUPitem = `#buup-${i}`;
		pname = $(`${BUPitem} input.pname`).val();
		desc = $(`${BUPitem} input.desc`).val();
		price = $(`${BUPitem} input.price`).val();
		stock = $(`${BUPitem} input.stock`).val();
		category = $(`${BUPitem} select.category`).val();
		status = $(`${BUPitem} select.status`).val();
		
			if(pname != "" && desc != "" && parseInt(price) > 0 && parseInt(stock) > 0 && category != "none" && status != "none"){
				let temp = {
					id: BUPitem,
					data:{
					  name: pname,
					  desc: desc,
					  price: price,
					  stock: stock,
					  category: category,
					  status: status,
					}
				};
				BUUPlist.push(temp);
			}
			else{
				if(pname == "") err.push("pname");
				if(desc == "") err.push("desc");
				if( parseInt(price) < 1) err.push("price");
				if( parseInt(stock) < 1) err.push("stock");
				if(category == "none") err.push("category");
				if(status == "none") err.push("status");
				hasUnfilledQty = true;
			}		
	}
	
	   if(hasUnfilledQty){
		   showSelectError('buup','validation');
		   console.log("err: ",err);
	   }
	   else{
		 //console.log("ret: ",ret);
		 
		 /**
		 $('#buup-dt').val(JSON.stringify(ret));
		$('#buup-form').submit();
		
		 **/
		 $('#button-box').hide();
		 $('#result-box').fadeIn();
		 
		 buupFire();
		 console.log(localStorage);
	   }
  }
}

function buupFire(){
	 let bc = localStorage.getItem("buupCtr");
	     if(!bc) bc = "0";
		 
		 
		
		 let fd = new FormData();
		 fd.append("dt",JSON.stringify(BUUPlist[bc]));
		 imgs = []; covers = [];
		
		//imgs = $(`${BUPitem}-image`)[0].files;
		imgs = $(`${BUUPlist[bc].id}-images-div input[type=file]`);
		cover = $(`${BUUPlist[bc].id}-images-div input[type=radio]:checked`);
		console.log("imgs: ",imgs);
		console.log("cover: ",cover);
		
		for(let r = 0; r < imgs.length; r++)
		 {
		    let imgg = imgs[r];
			let imgName = imgg.getAttribute("name");
            console.log("imgg name: ",imgName);			
            console.log("cover: ",cover.val());
            fd.append(imgName,imgg.files[0]);   			   			
		 }
		 
		 fd.append(cover.attr("name"),cover.val());
		 
		 
		 fd.append("_token",$('#tk').val());
		 console.log("fd: ",fd);
         
	
	//create request
	const req = new Request("buup",{method: 'POST', body: fd});
	//console.log(req);
	
	
	//fetch request
	fetch(req)
	   .then(response => {
		   if(response.status === 200){
			   //console.log(response);
			   
			   return response.json();
		   }
		   else{
			   return {status: "error:", message: "Network error"};
		   }
	   })
	   .catch(error => {
		    alert("Failed to upload product: " + error);			
	   })
	   .then(res => {
		   console.log(res);
          bc = parseInt(bc) + 1;
			     localStorage.setItem("buupCtr",bc);
				 
		   if(res.status == "ok"){
                  $('#result-ctr').html(bc);
				  
				  setTimeout(function(){
			       if(bc >= buupCounter){
					  $('#result-box').hide();
					  $("#finish-box").fadeIn();
					  window.location = "buup";
				  }
                  else{
					 buupFire();
				  }				  
		         },4000);
		   }
		   else if(res.status == "error"){
				     alert("An unknown network error has occured. Please refresh the app or try again later");	
                     $('#result-box').hide();
					  $("#finish-box").fadeIn();					 
		   }
		   
		    
		   
		  
	   }).catch(error => {
		    alert("Failed to send message: " + error);			
	   });
}


function displayProductSelect(product){
	return `
	<option value="${product.sku}">
	<div class="row">
	  <div class="col-md-5">
	     <img src="${product.img}" alt="preview" style="width: 50px; height: 50px;"/>
	  </div>
	  <div class="col-md-7">
		<p>${product.name} (N${product.amount}) | ${product.qty} pcs left</p>
	  </div>
	</div>
	</option>
	`;
}
