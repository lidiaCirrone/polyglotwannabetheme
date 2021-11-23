// fix by Raymond: https://kontext.tech/column/xml_xhtml_xslt_dhtml_css_javascript/807/trigger-event-after-all-images-loaded

var $grid = document.querySelector('#masonry-container');
var msnry = new Masonry($grid, {
   itemSelector: 'article',
   percentPosition: true
});
var $images = $grid.querySelectorAll('.card img');

Promise.all(
   Array.from($images).filter(img => !img.complete)
      .map(img => new Promise(resolve => {
         img.addEventListener('load', resolve);
         img.addEventListener('error', resolve);
      })
      )
).then(
   () => {
      msnry.layout();
   }
);