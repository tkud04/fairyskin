$(document).ready(() => {
    $('#login-btn').click(e => {
        e.preventDefault()
        const email = $('#email').val(), pass = $('#pass').val()

        if(email === '' || pass === ''){
            displayError('All fields are required')
        }
        else{
            $('#login-form').submit()
        }
    })

    $('#register-btn').click(e => {
        e.preventDefault()
        const email = $('#email').val(), pass = $('#password').val(),
              fname = $('#fname').val(), lname = $('#lname').val(),
              pass2 = $('#password-2').val()

        const v = email === '' || pass === '' || fname === '' || lname === '' ||
                pass2 === '', v2 = pass !== pass2
        
        if(v || v2){
            console.log({v,v2})
            let errorMessage = ''
            if(v) errorMessage = 'All fields are required'
            console.log({errorMessage})
            if(v2) errorMessage = 'Passwords do not match'
            console.log({errorMessage})
            displayError(errorMessage)
        }
        else{
            $('#signup-form').submit()
        }
    })

    $('#add-category').click(e => {
        e.preventDefault()
        hideElem('#categories-div')
        showElem('#add-categories-div')
    })

    $('#categories-back-button').click(e => {
        e.preventDefault()
        hideElem('#add-categories-div')
        showElem('#categories-div')
    })

    $('#add-category-name').change(() => {
      const c = $('#add-category-name').val()
      const cArr = c.split(' ')
      let ret = c

      if(cArr.length > 0){
        ret = cArr[0]
        for(let i = 1; i < cArr.length; i++){
            ret += `-${cArr[i]}`
        }
      }
      ret = ret.toLowerCase()
      $('#add-category-category').val(ret)
    })

    $('#add-category-btn').click(e => {
        e.preventDefault()
        const name = $('#add-category-name').val(), category = $('#add-category-category').val(),
              status = $('#add-category-status').val(), tk = $('#skf').val()
              v = name === '' || category === '' || status === 'none'

       
        if(v){
          displayError('All fields are required')
        }
        else{
          hideElem('#add-category-btn')
          showElem('#add-category-loading')

          const fd = new FormData()
          fd.append('_token',tk)
          fd.append('name',name)
          fd.append('category',category)
          fd.append('status',status)

          const onSuccess = () => {
            displaySuccess('Category added!')
            window.location = 'admin-center'
          }

          const onError = () => {
            displayError('Failed to add category, please try again')
            hideElem('#add-category-loading')
            showElem('#add-category-btn')
          }

          const req = new Request("add-category",{method: 'POST', body: fd});

          requestClan(req,onSuccess,onError)
        }
        
    })

    $('.update-category-status-btn').click(e => {
        e.preventDefault()
        let elem = e.target

        const mode = $(elem).attr('data-mode'),
              xf = $(elem).attr('data-xf')
        
        
          hideElem(`#update-category-status-btn-${xf}`)
          showElem(`#update-category-status-loading-${xf}`)

         let u = `update-category-status?xf=${xf}&mode=${mode}`

          const onSuccess = () => {
            displaySuccess('Category updated!')
            window.location = 'admin-center'
          }

          const onError = () => {
            displayError('Failed to update category, please try again')
            hideElem(`#update-category-status-loading-${xf}`)
            showElem(`#update-category-status-btn-${xf}`)
          
          }

          const req = new Request(u);

          requestClan(req,onSuccess,onError)
        
    })

    $('#add-product').click(e => {
        e.preventDefault()
        hideElem('#products-div')
        showElem('#add-products-div')
    })

    $('#products-back-button').click(e => {
        e.preventDefault()
        hideElem('#add-products-div')
        showElem('#products-div')
    })

    $('#buup-add-row-btn').click(e => {
        e.preventDefault()
        BUUPAddRow()
    })

    $('#buup-btn').click(e => {
        e.preventDefault()
        BUUP()
    })

    $('.update-product-status-btn').click(e => {
        e.preventDefault()
        let elem = e.target

        const mode = $(elem).attr('data-mode'),
              xf = $(elem).attr('data-xf')
        
        
          hideElem(`#update-product-status-btn-${xf}`)
          showElem(`#product-loading-${xf}`)

         const u = `update-product`
         
         const fd = new FormData()
         fd.append("_token",$('#skf').val())
         fd.append('mode',mode)
         fd.append('xf',xf)

          const onSuccess = () => {
            displaySuccess('Product updated!')
            window.location = 'admin-center'
          }

          const onError = () => {
            displayError('Failed to update product, please try again')
            hideElem(`#product-loading-${xf}`)
            showElem(`#update-product-status-btn-${xf}`)
          }


          const req = new Request(u,{
            method: 'post',
            body: fd
          });

          requestClan(req,onSuccess,onError)
        
    })

    $('.remove-product-btn').click(e => {
        e.preventDefault()
        let elem = e.target

        const xf = $(elem).attr('data-xf')
        
        
          hideElem(`#remove-product-btn-${xf}`)
          showElem(`#product-loading-${xf}`)

         const u = `remove-product?xf=${xf}`

          const onSuccess = () => {
            displaySuccess('Product removed!')
            window.location = 'admin-center'
          }

          const onError = () => {
            displayError('Failed to remove product, please try again')
            hideElem(`#product-loading-${xf}`)
            showElem(`#remove-product-btn-${xf}`)
          }


          const req = new Request(u);

          requestClan(req,onSuccess,onError)
        
    })

    $('#toggle-product-quick-view-modal').click(e => {
        e.preventDefault()
    })

    $('#quick-view-modal-container').on('hidden.bs.modal',e => {
        e.preventDefault()
       clearProductModal()
    })



})