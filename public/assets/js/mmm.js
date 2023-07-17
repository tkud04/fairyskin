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

    $('#add-banner').click(e => {
        e.preventDefault()
        hideElem('#banners-div')
        showElem('#add-banners-div')
    })

    $('#banners-back-button').click(e => {
        e.preventDefault()
        hideElem('#add-banners-div')
        showElem('#banners-div')
    })

    $('#add-banner-btn').click(e => {
        e.preventDefault()
       
        const url = $('#add-banner-url').val(), topText = $('#add-banner-toptext').val(),
        middleText = $('#add-banner-middletext').val(), bottomText = $('#add-banner-bottomtext').val(),
        actionText = $('#add-banner-actiontext').val(), textTheme = $('#add-banner-text-theme').val(),
        textPosition = $('#add-banner-text-position').val(), status = $('#add-banner-status').val(),
        img = $('#add-banner-img')

        const v = url === '' || topText === '' || middleText === '' || bottomText === '' ||
                  actionText === '' || textTheme === 'none' || textPosition === 'none' ||
                  status === 'none'

        if(v){
            displayError('Required fields are missing')
        }
        else{
            const textClass = `hero-content-2 ${textTheme} ${textPosition.length > 0 ? textPosition : ''}`
            hideElem(`#add-banner-btn`)
            showElem(`#add-banner-loading`)

            const fd = new FormData()
         fd.append("_token",$('#skf').val())
         fd.append('url',url)
         fd.append('top_text',topText)
         fd.append('middle_text',middleText)
         fd.append('bottom_text',bottomText)
         fd.append('action_text',actionText)
         fd.append('class',textClass)
         fd.append('status',status)
         fd.append('ird',img[0].files[0])

          const onSuccess = () => {
            displaySuccess('Banner added!')
            window.location = 'admin-center'
          }

          const onError = () => {
            displayError('Failed to add banner, please try again')
            hideElem(`#add-banner-loading`)
            showElem(`#add-banner-btn`)
          }

          const u = 'add-banner'

          const req = new Request(u,{
            method: 'post',
            body: fd
          });

          requestClan(req,onSuccess,onError)

        }
    })

    $('.update-banner-btn').click(e => {
      e.preventDefault()
      let elem = e.target

      const mode = $(elem).attr('data-mode'),
            xf = $(elem).attr('data-xf')
      
        hideElem(`#update-banner-btn-${xf}`)
        showElem(`#update-banner-loading-${xf}`)

       const u = `update-banner`
       
       const fd = new FormData()
       fd.append("_token",$('#skf').val())
       fd.append('mode',mode)
       fd.append('xf',xf)

        const onSuccess = () => {
          displaySuccess('Banner status updated!')
          window.location = 'admin-center'
        }

        const onError = () => {
          displayError('Failed to update banner status, please try again')
          hideElem(`#update-banner-loading-${xf}`)
          showElem(`#update-banner-btn-${xf}`)
        }


        const req = new Request(u,{
          method: 'post',
          body: fd
        });

        requestClan(req,onSuccess,onError)
      
  })


    $('.remove-banner-btn').click(e => {
      e.preventDefault()
      let elem = e.target

      const xf = $(elem).attr('data-xf')
      
      
        hideElem(`#remove-banner-btn-${xf}`)
        showElem(`#update-banner-loading-${xf}`)

       const u = `remove-banner?xf=${xf}`

        const onSuccess = () => {
          displaySuccess('Banner removed!')
          window.location = 'admin-center'
        }

        const onError = () => {
          displayError('Failed to remove banner, please try again')
          hideElem(`#update-banner--loading-${xf}`)
          showElem(`#remove-banner-btn-${xf}`)
        }


        const req = new Request(u);

        requestClan(req,onSuccess,onError)
      
  })

  $('#contact-btn').click(e => {
    e.preventDefault()
   
    const name = $('#contact-name').val(), subject = $('#contact-subject').val(), 
          message = $('#contact-message').val(), email = $('#contact-email').val()

    const v = name === '' || subject === '' || message === '' || email === ''

    if(v){
        displayError('Required fields are missing')
    }
    else{
       hideElem(`#contact-btn`)
        showElem(`#contact-loading`)

      const fd = new FormData()
       fd.append("_token",$('#skf').val())
       fd.append('name',name)
       fd.append('subject',subject)
       fd.append('message',message)
       fd.append('email',email)

      const onSuccess = () => {
        displaySuccess('Message sent! We would reach out to you shortly.')
        window.location = 'contact'
      }

      const onError = () => {
        displayError('Failed to send message, please try again')
        hideElem(`#contact-loading`)
        showElem(`#contact-btn`)
      }

      const u = 'contact'

      const req = new Request(u,{
        method: 'post',
        body: fd
      });

      requestClan(req,onSuccess,onError)

    }
})

$('#add-review-btn').click(e => {
  e.preventDefault()
 
  const name = $('#add-review-name').val(), rating = $('#add-review-rating').val(),
               review = $('#add-review-review').val(), sku = $('#add-review-product').val()

  const v = name === '' || rating === '' || review === ''

  if(v){
      displayError('Required fields are missing')
  }
  else{
     hideElem(`#add-review-btn`)
      showElem(`#add-review-loading`)

    const fd = new FormData()
     fd.append("_token",$('#skf').val())
     fd.append('name',name)
     fd.append('sku',sku)
     fd.append('rating',rating)
     fd.append('review',review)

    const onSuccess = () => {
      displaySuccess('Review submitted! Your comment would be displayed after review by our admins.')
      window.location = `product?sku=${sku}`
    }

    const onError = () => {
      displayError('Failed to add your review, please try again')
      hideElem(`#add-review-loading`)
      showElem(`#add-review-btn`)
    }

    const u = `add-review`

    const req = new Request(u,{
      method: 'post',
      body: fd
    });

    requestClan(req,onSuccess,onError)

  }
})

$('#add-to-cart-btn').click(e => {
  e.preventDefault()
 
  let cu = $('#add-to-cart-btn').attr('data-cu'), qty = $('#add-to-cart-qty').val()

  if(!qty || qty < 1) qty = 1
  window.location = `${cu}&qty=${qty}`

})



})