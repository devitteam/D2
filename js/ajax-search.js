// jQuery( function ($) {
// 	$('.search_form input[name="s"]').on('keyup', function() {
// 		var search = $('.search_form input[name="s"]').val();
// 		if (search.length < 2) {
// 			return false;
// 		}
// 		var data = {
// 			s: search,
// 			action: 'search-ajax',
// 			nonce: search_form.nonce,
// 		};
// 		$.ajax({
// 			url: search_form.url,
// 			data: data,
// 			type: 'POST',
// 			dataType: 'json',
// 			beforeSend: function(xhr) {
				
// 			},
// 			succes: function(data) {
// 				$('.search-box .search-result').html(data);
// 				console.log(data);
// 			}
// 		});
// 	});
// });

jQuery(function($){
	var searchTerm = '';
	
	$('#search-engine').keydown(function(){
		searchTerm = $.trim($(this).val());
	});
		
	$('#search-engine').keyup(function(){
		if ($.trim($(this).val()) != searchTerm) { // Если новое значение не равно старому, идем дальше
			searchTerm = $.trim($(this).val());
			if(searchTerm.length > 1){ // Если введено больше 2-х символов, идем дальше
				$.ajax({
					url : '/wp-admin/admin-ajax.php', // Ссылка на AJAX обработчик WP
					type: 'POST', // Отправляем данные методом POST
					data: {
						'action' : 'd2_ajax_search', // Вызываемое действие, которое мы описали в functions.php
						'term' : searchTerm // Отправляемые данные поля ввода
					},
					beforeSend: function() { // Перед отправкой данных
						$('.search-result .result-search-list').fadeOut(100); // Скроем блок результатов
						$('.search-result .result-search-list').empty(); // Очистим блок результатов
						// console.log('beforeSend');
					},
					success: function(result) { // После выполнения поиска
						$('.search-result .result-search-list').fadeIn(100).html(result); // Покажем блок результатов и добавим в него полученные данные
						// console.log('success');
					}
				});
			}
		}
	});
	
	$('#search-engine').focusin(function() {
		$('.search-result').fadeIn(100);
	})
	
	$(document).mouseup(function(e) {
		if ((!$('.search-result').is(e.target) && $('.search-result').has(e.target).length === 0) && (!$('#search-engine').is(e.target) && $('#search-engine').has(e.target).length === 0)) {
			$('.search-result').fadeOut(100);
		}
	});
});