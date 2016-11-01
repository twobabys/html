//定义dom元素的对象
var music_list_obj = $('#music_list_obj');
var music_audio_obj = $('#music_audio_obj');
var date_obj = $('#date_obj');
var week_obj = $('#week_obj');
var lunar_obj = $('#lunar_obj');
var fruit_obj = $('#fruit_obj');

//显示日期时间
(function showTime(){
	var now_time = new Date();
	date_obj.text(now_time.toLocaleString());
	setTimeout(showTime, 1000);
})();

//显示星期几
(function showWeek(){
	var now_time = new Date();
	var week_code = now_time.getDay();
	var week_text = ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];
	week_obj.text(week_text[week_code]);
})();

//显示农历
(function showLunar(){
    var now_time = new Date();
    var year = now_time.getFullYear();   //年
    var month = now_time.getMonth();  //月
    var day = now_time.getDate();    //日
    lunar_obj.text(getLunarStr(year+'/'+(month+1)+'/'+day));
})();

//显示提醒事项
(function showTips(){
	var now_time = new Date();
	var month = now_time.getMonth();
	var fruits = ['猕猴桃','甘蔗','菠萝','山竹','草莓','樱桃','桃','西瓜','葡萄','梨','苹果','桔子'];
	fruit_obj.text(fruits[month]);
})();

//事件处理程序

//点击歌曲列表即可播放相应歌曲
music_list_obj.delegate('li', 'click', function(){
	music_audio_obj.attr('src', '../../resource/music/'+this.innerHTML+'.mp3');
	$(this).addClass('on');
	$(this).siblings('li').removeClass('on');
});

//留用暂时
/*test_obj.click(function(){
	$.ajax({
		url: "/index.php/Musiclist/index",
		type: "post",
		data: "null",
		dataType: "json",
		success: function (msg) {
			console.log(msg);
			console.log(msg.length);
			console.log(msg[0]);
		},
		error: function(){
            alert('Failed');
        }
	});
});*/