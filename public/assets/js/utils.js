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
		  console.log(typeof res)	
		  if(typeof res !== 'undefined'){ 
		   if(res.status === "ok"){
              typeof okCallback === 'function' && okCallback()
		   }
		   else{
			typeof errorCallback === 'function' && errorCallback()    					 
		   }
		}
	   }).catch(error => {
		console.log('error: ',error)
		    displayError("Failed to fetch: " + error)
			typeof errorCallback === 'function' && errorCallback()  		
	   });
}

const BUUPAddRow = () => {	
	let str = `
	 <tr id="buup-${buupCounter}">
	 <td>Will be generated</td>
	 <td><input type="text" placeholder="Product name" class="pname"></td>
	   <td width="40%"><input type="text" placeholder="Product description" class=" desc"></td>
	   <td><input type="number"  placeholder="Price in NGN" class=" price"></td>
	   <td><input type="number"  placeholder="Stock" class=" stock"></td>
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
	         <input type="file" placeholder="Upload image"  data-ic="0" class=" images" onchange="readURL(this,'${buupCounter}')" name="buup-${buupCounter}-images[]">
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
	   <a href="#" style="border: 1px solid #000; padding: 5px; border-radius: 5px; margin-right: 5px;" onclick="BUUPAddImage('${buupCounter}'); return false;">Add image</button>
	   <a href="#" style="border: 1px solid #000; padding: 5px; border-radius: 5px;" onclick="BUUPRemoveRow('${buupCounter}'); return false;">Cancel</button>
	  
	   </td>
	 </tr>
	`;
	++buupCounter;
	$('#buup-table').append(str);
}

const BUUPRemoveRow = (ctr) => {
	let r = $(`#buup-${ctr}`);
	console.log(r);
	r.remove();
	--buupCounter;
}

const readURL = (input,ctr) => {
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

const showSelectError = (type,err) => {
	$(`#${type}-select-${err}-error`).fadeIn()
}


const BUUPAddImage = (ctr) => {
	let i = $(`#buup-${ctr}-images-div`), imgCount = $(`#buup-${ctr}-images-div input[type=file]`).length;
	console.log(imgCount);
	i.append(`<div class="row">
	          <div class="col-md-12">
	          <input type="file" placeholder="Upload image" data-ic="${imgCount}" onchange="readURL(this,'${ctr}')" class=" images" name="buup-${ctr}-images[]">
			  </div>
			  <div class="col-md-12">
			    <div class="row">
			      <div class="col-md-7">
	                <img id="buup-${ctr}-preview-${imgCount}" src="#" alt="preview" style="width: 50px; height: 50px;"/>
			      </div>
			      <div class="col-md-5">
			        <input type="radio" name="buup-${ctr}-cover" value="${imgCount}">
			      </div>
			    </div>
			    </div>
			  </div>
	  `);
}

const hideElems = (cls) => {
	switch(cls){
		case 'bup':
		  hideElem(['#bup-select-product-error','#bup-select-qty-error'])
		break;
		
		case 'buup':
		  hideElem(['#buup-select-product-error','#buup-select-validation-error','#buup-select-qty-error'])
		break;
	}
}

const BUUP = () => {
	hideElems('buup')
	console.log("BUUPlist length: ",buupCounter)
	
	
	if(buupCounter < 1){
		showSelectError('buup','product')
	}
	else{
	ret = [], hasUnfilledQty = false; err = []

	for(let i = 0; i < buupCounter; i++){
		let BUPitem = `#buup-${i}`;
		pname = $(`${BUPitem} input.pname`).val();
		desc = $(`${BUPitem} input.desc`).val();
		price = $(`${BUPitem} input.price`).val();
		stock = $(`${BUPitem} input.stock`).val();
		category = $(`${BUPitem} select.category`).val();
		productStatus = $(`${BUPitem} select.status`).val();
		
			if(pname !== "" && desc !== "" && parseInt(price) > 0 && parseInt(stock) > 0 && category !== "none" && productStatus !== "none"){
				let temp = {
					id: BUPitem,
					data:{
					  name: pname,
					  desc: desc,
					  price: price,
					  stock: stock,
					  category: category,
					  status: productStatus,
					}
				};
				BUUPlist.push(temp);
			}
			else{
				if(pname === "") err.push("pname");
				if(desc === "") err.push("desc");
				if( parseInt(price) < 1) err.push("price");
				if( parseInt(stock) < 1) err.push("stock");
				if(category === "none") err.push("category");
				if(productStatus === "none") err.push("status");
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
		 hideElem('#buup-button-box')
		 showElem('#buup-result-box')
		 
		 buupFire()
		 console.log(localStorage)
	   }
  }
}

const buupFire = () => {
	 let bc = localStorage.getItem("buupCtr");
	     if(!bc) bc = "0";
		 console.log('BUUPlist: ',BUUPlist)
		 
		
		 let fd = new FormData()
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
		 
		 
		 fd.append("_token",$('#skf').val());
         
	
	//create request
	const req = new Request("buup",{method: 'POST', body: fd});
	//console.log(req);
	const onSuccess = () => {
		bc = parseInt(bc) + 1
		localStorage.setItem("buupCtr",bc)

		$('#result-ctr').html(bc)
				  
		setTimeout(function(){
		 if(bc >= buupCounter){
			hideElem('#buup-result-box')
			showElem("#buup-finish-box")
			window.location = "admin-center"
		}
		else{
		   buupFire()
		}				  
	   },4000)
	}

	const onError = () => {
      displayError('Failed to upload product due to an issue, please try again')
	  hideElem(['#buup-result-box','#buup-finish-box'])
	  showElem("#buup-button-box")
	}

	requestClan(req,onSuccess,onError)
}


const displayProductSelect = (product) => {
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

const quickViewProduct = (data) => {
	console.log('data: ',data)
    const myModal = new bootstrap.Modal('#quick-view-modal-container', {
		keyboard: false
	  })
 
	  for(let img of data.imgs){
		$('#qvp-lg-images').append(`
		 <div class="lg-image">
		  <img src="${img}" alt="">
	     </div>
		`)

		$('#qvp-sm-images').append(`
		 <div class="lg-image">
		  <img src="${img}" alt="" style="width: 117px; height: 151px;">
	     </div>
		`)

		$('#qvp-name').html(data.name)
		$('#qvp-description').html(data.pd.description)
		$('#qvp-price').html(`&#8358;${data.pd.formattedAmount}`)
		$('#qvp-category').html(data.pd.category.toUpperCase())
	  }
	myModal.toggle()
}

const clearProductModal = () => {
	$('#qvp-lg-images').html('')
	$('#qvp-sm-images').html('')
    $('#qvp-name').html('')
		$('#qvp-description').html('')
		$('#qvp-price').html('')
		$('#qvp-category').html('')
}
