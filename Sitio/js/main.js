function randomImages()
{
  var images = ['trole.jpg', 'bellas.jpg', 'cantina.jpg', 'castillo.jpg', 'comida.jpg', 'nocturna.jpg'];
  $('.hero-unit').css({'background-image': 'url(img/fotos/' + images[Math.floor(Math.random() * images.length)] + ')'});
  $('.hero-unit').css({'background-repeat': 'no-repeat'});
  $('.hero-unit').css({'background-size': 'cover'});
}

function setPost()
{
	

}