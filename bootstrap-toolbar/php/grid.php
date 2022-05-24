<script>

    

window.addEventListener('load',()=>{

    if(typeof(tinyMCE) != "undefined"){



    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    tinyMCE.get('jseditor').dom.loadCSS('<?php echo DOMAIN_PLUGINS.'bootstrapbar/css/gridborder.css';?>');




document.querySelector('#jstitle').insertAdjacentHTML('afterend','<div class="bootstrap-bar justify-content-between my-2"></div>')


document.querySelector('.bootstrap-bar').innerHTML=`

<button class="btn mx-1 btn-light grid-12  my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col12.png';?>"></button>
<button class="btn  btn-light grid-6-6 my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col66.png';?>"></button>
<button class="btn  btn-light grid-8-4 my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col84.png';?>"></button>
<button class="btn  btn-light grid-4-8 my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col48.png';?>"></button>
<button class="btn  btn-light grid-3-3-3-3 my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col3333.png';?>"></button>
<button class="btn  btn-light grid-4-4-4 my-1" style="width:8%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col444.png';?>"></button>

<button class="btn btn-light grid-12-f  my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col12wi.png';?>"></button>
<button class="btn  btn-light grid-6-6-f my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col66wi.png';?>"></button>
<button class="btn  btn-light grid-8-4-f my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col84wi.png';?>"></button>
<button class="btn  btn-light grid-4-8-f my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col48wi.png';?>"></button>
<button class="btn  btn-light grid-3-3-3-3-f  my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col3333wi.png';?>"></button>
<button class="btn  btn-light grid-4-4-4-f  my-1" style="width:7%"><img width="40px" src="<?php echo DOMAIN_PLUGINS.'bootstrapbar/img/col444wi.png';?>"></button>
 
`;



document.querySelector('.grid-12').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-12">

    <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
 Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
    </div>

    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})


//6-6

document.querySelector('.grid-6-6').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-6">

    <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
 Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
    </div>
    
    <div class="col-md-6">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
</div>
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})




//8-4

document.querySelector('.grid-8-4').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-8">

    <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
 Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
    </div>
    
    <div class="col-md-4">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
</div>
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})



 

//8-4

document.querySelector('.grid-4-8').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-4">

    <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
 Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
    </div>
    
    <div class="col-md-8">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
</div>
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})










//3-3-3-3

document.querySelector('.grid-3-3-3-3').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-3">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
    
    <div class="col-md-3">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

<div class="col-md-3">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

<div class="col-md-3">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})








//4-4-4

document.querySelector('.grid-4-4-4').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-4">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
    
    <div class="col-md-4">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

<div class="col-md-4">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

 
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})




//with foto


document.querySelector('.grid-12-f').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-12">

    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">

    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})


//6-6

document.querySelector('.grid-6-6-f').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-6">

    <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
 Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
    </div>
    
    <div class="col-md-6">

    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})




//8-4

document.querySelector('.grid-8-4-f').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-8">

    <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
 Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
    </div>
    
    <div class="col-md-4">

    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})



 

//8-4

document.querySelector('.grid-4-8-f').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-4">
    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
      </div>
    
    <div class="col-md-8">

<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. 
Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim.
Nullam molestie pretium finibus. Etiam id risus mauris. Vivamus volutpat laoreet urna ac molestie. Praesent sit amet tortor a turpis congue eleifend nec vitae dolor. Duis tempus, elit nec facilisis eleifend, sapien tellus facilisis quam, non accumsan erat justo ornare tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </p>
</div>
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})










//3-3-3-3

document.querySelector('.grid-3-3-3-3-f').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-3">
    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
    
    <div class="col-md-3">
    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

<div class="col-md-3">
<img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

<div class="col-md-3">
<img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})








//4-4-4

document.querySelector('.grid-4-4-4-f').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-4">
    <img src="https://picsum.photos/seed/picsum/1920/1080" style="max-width:100%;height:auto !important;">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
    
    <div class="col-md-4">
    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

<div class="col-md-4">
<img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
<h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>

 
    </div>
    `;

    tinymce.get("jseditor").setContent(tinymce.get("jseditor").getContent()+value)
})



 
}


})
 

</script>