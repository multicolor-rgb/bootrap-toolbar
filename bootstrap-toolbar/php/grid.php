<script>

    

window.addEventListener('load',()=>{

    if(typeof(tinyMCE) != "undefined"){



    tinyMCE.get('jseditor').dom.loadCSS('<?php echo HTML_PATH_CORE_CSS;?>bootstrap.min.css');
    tinyMCE.get('jseditor').dom.loadCSS('<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/css/gridborder.css';?>');




document.querySelector('#jstitle').insertAdjacentHTML('afterend','<div class="bootstrap-bar justify-content-between my-2"></div>')


document.querySelector('.bootstrap-bar').innerHTML=`

<div class="bg-light border d-flex align-items-center  p-2 mb-2">

<button class="btn mx-0 btn-light grid-12  my-1 " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col12.png';?>"></button>
<button class="btn  btn-light grid-6-6 my-1  "><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col66.png';?>"></button>
<button class="btn  btn-light grid-8-4 my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col84.png';?>"></button>
<button class="btn  btn-light grid-4-8 my-1  "><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col48.png';?>"></button>
<button class="btn  btn-light grid-3-3-3-3 my-1  "><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col3333.png';?>"></button>
<button class="btn  btn-light grid-4-4-4 my-1 " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col444.png';?>"></button>

<button class="btn btn-light grid-12-f  my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col12wi.png';?>"></button>
<button class="btn  btn-light grid-6-6-f my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col66wi.png';?>"></button>
<button class="btn  btn-light grid-8-4-f my-1 " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col84wi.png';?>"></button>
<button class="btn  btn-light grid-4-8-f my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col48wi.png';?>"></button>
<button class="btn  btn-light grid-3-3-3-3-f  my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col3333wi.png';?>"></button>
<button class="btn  btn-light grid-4-4-4-f  my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col444wi.png';?>"></button>
<button class="btn  btn-light grid-6-6-align  my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/col66align.jpg';?>"></button>
<button class="btn  btn-light hero  my-1  " ><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/hero.jpg';?>"></button>

<div style="height:30px;width:1px;background:#333;display:block;margin:0 5px;"></div>
<button class="btn btn-light btnprimary "><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/btnprimary.jpg';?>"></button>
<button class="btn btn-light btndanger "><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/btndanger.jpg';?>"></button>
<button class="btn btn-light btnsuccess"><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/btnsuccess.jpg';?>"></button>
<button class="btn btn-light btndark"><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/btndark.jpg';?>"></button>
<button class="btn btn-light btnlight"><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/btnlight.jpg';?>"></button>
<button class="btn btn-light blist"><img width="25px" src="<?php echo DOMAIN_PLUGINS.'bootstrap-toolbar/img/list.jpg';?>"></button>

</div>



 

 

`;



document.querySelector('.grid-12').addEventListener('click',(e)=>{
   

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);




})


//6-6

document.querySelector('.grid-6-6').addEventListener('click',(e)=>{
 

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);



})




//8-4

document.querySelector('.grid-8-4').addEventListener('click',(e)=>{
 
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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})



 

//8-4

document.querySelector('.grid-4-8').addEventListener('click',(e)=>{
 

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})










//3-3-3-3

document.querySelector('.grid-3-3-3-3').addEventListener('click',(e)=>{
 

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})








//4-4-4

document.querySelector('.grid-4-4-4').addEventListener('click',(e)=>{
 

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})




//with foto


document.querySelector('.grid-12-f').addEventListener('click',(e)=>{
 

    e.preventDefault();


    let value=`
    
    <div class="row">

    <div class="col-md-12">

    <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">

    </div>
    </div>
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})


//6-6

document.querySelector('.grid-6-6-f').addEventListener('click',(e)=>{
 

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

    </div>
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})




//8-4

document.querySelector('.grid-8-4-f').addEventListener('click',(e)=>{
 

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

    </div>
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})



 

//8-4

document.querySelector('.grid-4-8-f').addEventListener('click',(e)=>{
 

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
    <br>
    `;
    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})










//3-3-3-3

document.querySelector('.grid-3-3-3-3-f').addEventListener('click',(e)=>{
 

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);


})








//4-4-4

document.querySelector('.grid-4-4-4-f').addEventListener('click',(e)=>{
 

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
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})








//6-6-align

document.querySelector('.grid-6-6-align').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('<?php echo HTML_PATH_CORE_CSS;?>bootstrap.min.css');


    e.preventDefault();


    let value=`
    
    <div class="row align-items-center">

    <div class="col-md-6">
 <h2>lorem ipsum</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>
</div>
 

<div class="col-md-6">
<img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid">
 
</div>

 
    </div>
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})





//6-6-align

document.querySelector('.hero').addEventListener('click',(e)=>{
 

    e.preventDefault();


    let value=`
    
    <div class="row a">

    <div class="col-md-12 border bg-light py-5">
 <h1>lorem ipsum</h1>
<p class="lead text-justify">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum nisi sit amet ornare viverra. Integer a odio vitae nisi faucibus molestie. Nam eget diam nulla. Maecenas et vestibulum lacus. Etiam elementum vestibulum finibus. Fusce eleifend lobortis est sed dignissim. 
</p>

<a href="#" class="btn btn-success">Primary link</a>

</div>

    </div>
    <br>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})



//btn-primary

document.querySelector('.btnprimary').addEventListener('click',(e)=>{
 

    e.preventDefault();


    let value=`
    <a class="btn btn-primary" href="#">custom button</a>
 
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})


//btn-danger

document.querySelector('.btndanger').addEventListener('click',(e)=>{
    tinyMCE.get('jseditor').dom.loadCSS('<?php echo HTML_PATH_CORE_CSS;?>bootstrap.min.css');


    e.preventDefault();


    let value=`
    <a class="btn btn-danger" href="#">custom button</a>
  
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})

//btn-success

document.querySelector('.btnsuccess').addEventListener('click',(e)=>{
  

    e.preventDefault();


    let value=`
    <a class="btn btn-success" href="#">custom button</a>
 
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})



//btn-dark

document.querySelector('.btndark').addEventListener('click',(e)=>{
 

    e.preventDefault();


    let value=`
    <a class="btn btn-dark" href="#">custom button</a>
  
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})


//btn-light

document.querySelector('.btnlight').addEventListener('click',(e)=>{
 

    e.preventDefault();


    let value=`
    <a class="btn btn-light" href="#">custom button</a>
 
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})


//blist

document.querySelector('.blist').addEventListener('click',(e)=>{
 

    e.preventDefault();


    let value=`
    <ul class="list-group">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
    `;

    tinymce.activeEditor.execCommand('mceInsertContent', false, value);

})

 
 

 
}

})
 

</script>