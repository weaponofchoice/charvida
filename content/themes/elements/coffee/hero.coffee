###
  Theory:
    This only works for an object which ratio is 2x1:
    If wrapper's width is smaller than twice the height, then crop the sides. Else, crop the top and bottom.
    
    Wrapper's width = w
    Wrapper's height = h
    
    w < (2 * h) = crop sides
    w > (2 * h) = crop top & bottom
  
  Method:
    1. Wrap your stretched object(usually an image) in a wrapper
    2. Calculate wrapper's width & height(even if default is 100%)
    3. Set object's min-height to wrapper's height
    4. Set classes based on the theory shown above.
###

$ ->
  ###
    First, give heights to the hero
  ###
  hero = $('.section_hero')
  hero_banner = $('.section_hero-banner')
  
  # Determine heights
  hero_height = window.innerHeight - 50
  
  # Apply heights
  hero.css "height", hero_height
  hero_banner.css "height", hero_height
  
  ###
    Next, shape the stretched object
  ###
  wrapper = $('.is-stretched-wrapper')
  object = $('.is-stretched-object')
  ratio = object.width() / object.height()
  
  wrapper_w = wrapper.width()
  wrapper_h = wrapper.height()
  
  object.css "min-height", wrapper_h
  
  if wrapper_w < wrapper_h * ratio
    object.removeClass "is-stretched-wide"
    object.addClass "is-stretched-high"
  else
    object.removeClass "is-stretched-high"
    object.addClass "is-stretched-wide"
  
  ###
    Scroll animation
  ###
  trigger = $('.arrow-scroll')
  
  trigger.css "top", hero_height - 60
  
  trigger.click ->
    $('html, body').animate({scrollTop: hero_height}, 500)
    
  ###
    Fade effect
  ###
  hero_content = $('.section_hero .section_content')
  hero_content.addClass "is-visible-0.7s"
  
  waypoint = new Waypoint(
    element: $('.section_hero .section_content')
    handler: (direction) ->
      hero_content.toggleClass "is-visible-0.7s"
      hero_content.toggleClass "is-hidden-0.7s"
      return
    offset: 250)

  # ---
  # generated by js2coffee 2.0.3
  
  ###
    Recalculate when window is resized
  ###
  $(window).on 'resize', ->
    # Re-determine heights
    hero_height = window.innerHeight - 50
    
    # Re-apply heights
    hero.css "height", hero_height
    hero_banner.css "height", hero_height
    trigger.css "top", hero_height - 30
    
    wrapper = $('.is-stretched-wrapper')
    object = $('.is-stretched-object')
    ratio = object.width() / object.height()
    
    wrapper_w = wrapper.width()
    wrapper_h = wrapper.height()
    
    object.css "min-height", wrapper_h
    
    if wrapper_w < wrapper_h * ratio
      object.removeClass "is-stretched-wide"
      object.addClass "is-stretched-high"
    else
      object.removeClass "is-stretched-high"
      object.addClass "is-stretched-wide"