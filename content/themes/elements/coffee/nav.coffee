$ ->
  menu_mobile = $('.menu_mobile')
  open = $('.trigger-menuOpen')
  close = $('.trigger-menuClose')
  
  open.addClass "is_active"
  
  open.click ->
    menu_mobile.addClass "is_active"
    open.removeClass "is_active"
    close.addClass "is_active"
    
  close.click ->
    menu_mobile.removeClass "is_active"
    close.removeClass "is_active"
    open.addClass "is_active"
    
  $('.menu_mobile a').click ->
    delay = (ms, func) -> setTimeout func, ms
    
    delay 500, -> menu_mobile.removeClass "is_active"
    delay 500, -> close.removeClass "is_active"
    delay 500, -> open.addClass "is_active"