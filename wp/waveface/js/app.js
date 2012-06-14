$(function(){

	var $post = $('.post')

	$post.find('.entry-content').hide()

	$post.on('click', 'header a',  function(event) {

		event.preventDefault()

		$(event.delegateTarget)
			.toggleClass('showAnswer')
			.find('.entry-content').toggle()


	})

	$('.sider-menu li').click(function() { window.location = $(this).find('a').attr('href')})

})