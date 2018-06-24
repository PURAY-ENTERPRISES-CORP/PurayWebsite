
var language;
//load language from cookie
function loadLanguage() {
	language = getLanguage();
	//if language not set, set it to english
	if ( language != 'en' && language != "zh" && language != "fr") {
		language = 'en';
	}
	console.log("language is", language);
	//apply language
	applyLanguage();
}

//use cookie to save language
function saveLanguage( language ) {
	eraseCookie( "language" );
	createCookie( "language", language, 180 );
}
//read language from cookie
function getLanguage() {
	return readCookie( "language" );
}
//dictionary for language replacement
var arrLang = {
	'en': {
		'product': 'PRODUCT',
		'idea':"I.D.E.A",
		'contactUs':"CONTACT US",
		'naturalBeauty' : "YOUR NATURAL BEAUTY",
		'smartHealth' : "YOUR SMART HEALTH",
		'productName' : "HYDROGEN WATER SPRAY",
		'newsletter':" NEWSLETTER",
		'email' : 'EMAIL',
			'invalidEmail':"Please enter a valid email address.",
			'register':"REGISTER",
			'contactBtm':"Contact",
			'wechat':"Wechat",
			'languagePref':"Language",
			'T&C':"Terms & Conditions",
			'sendEnquiry':"SEND ENQUIRY",
			'thankSubscription':"Thank you for your registration.",
			'contactEx1':"You can email us at",
			'contactEx2':"An advisor will respond to you in English, French or Mandarin",
			'contactEx3':"within 24 hours, from Monday to Saturday.",
			'titleLabel':"TITLE",
			'firstNameLabel':"FIRST NAME",
			'lastNameLabel':"LAST NAME",
			'emailSubLabel':'EMAIL',
			'phoneLabel':'PHONE NUMBER (OPTIONAL)',
			'submitBtn':"SUBMIT",
			'cancelBtn':"CANCEL",
			'reminder':"This Field is Required.",
			'phoneReminder' : "Invalid Phone Number."
		},
	'zh': {
		'product': '产品',
		'idea':"产.品.理.念",
		'contactUs':"联系我们",
		'naturalBeauty' : "你的自然美丽",
		'smartHealth' : "你的智能健康",
		'productName' : "富氢水喷雾",
		'newsletter':"新闻资讯",
		'email' : '邮箱',
		'invalidEmail':"请输入有效的邮箱地址",
		'register':"注册",
		'contactBtm':"联络",
		'wechat':"微信",
		'languagePref':"语言",
		'T&C':"条款和条件",
		'sendEnquiry':"发送请求",
		'thankSubscription':"感谢您的注册。",
			'contactEx1':"您可以通过电子邮箱联系我们：",
		'contactEx2':"顾问将在周一至周六的24小时内以英文，法文或普通话",
			'contactEx3':"回复您",
			'titleLabel':"称谓",
			'firstNameLabel':"名字",
			'lastNameLabel':"姓氏",
			'emailSubLabel':"电子邮箱",
			'phoneLabel':'电话号码 (非必须)',
			'submitBtn':"提交",
			'cancelBtn':"取消",
			'reminder':"此项不能为空",
			'phoneReminder' : "无效电话号码"
	},
	'fr':{
		'product': 'PRODUIT',
		'idea':"I.D.É.E",
		'contactUs':"CONTACTEZ NOUS",
		'naturalBeauty' : "VOTRE BEAUTÉ NATURELLE",
		'smartHealth' : "VOTRE SANTÉ INTELLIGENTE",
		'productName' : "PULVÉRISATEUR D'EAU HYDROGÈNE",
		'newsletter':"BULLETIN",
		'email' : 'EMAIL',
		'invalidEmail':"S'il vous plaît, mettez une adresse email valide.",
		'register':"REGISTRE",
		'contactBtm':"Contact",
		'wechat':"Wechat",
		'languagePref':"La langue",
		'T&C':"	Termes et conditions",
		'sendEnquiry':"ENVOYER ENQUÊTE",
		'thankSubscription':"Merci pour votre inscription.",
		'contactEx1':"Vous pouvez nous envoyer un courriel à",
		'contactEx2':"Un conseiller vous répondra en anglais, français ou mandarin",
		'contactEx3':"dans les 24 heures, du lundi au samedi.",
		'titleLabel':"TITRE",
		'firstNameLabel':"PRÉNOM",
		'lastNameLabel':"NOM DE FAMILLE",
		'emailSubLabel':"EMAIL",
		'phoneLabel':'NUMÉRO DE TÉLÉPHONE (FACULTATIF)',
		'submitBtn':"SOUMETTRE",
		'cancelBtn':"ANNULER",
		'reminder':"Ce champ est requis.",
		'phoneReminder' : "Numéro de téléphone invalide."
	}
};
//function to apply language
function applyLanguage() {
	disableAndSetStyle(language);
	//jquery to replace words corresponding to arrLang regarding current language
	$( '.lang' )
		.each( function() {
			$( this )
				.text( arrLang[ language ][ $( this )
					.attr( 'key' ) ] );
		} );
		if(language == "en"){
			$("#search").attr("placeholder","SEARCH");
		  $("#agreementEmailSub").html("I have read, understood and agree to the  <a>Privacy Policy</a> and the  <br> <a>Terms of Use</a>")	;
			$("#commentTextArea").attr("placeholder","COMMENT");
			$("#enquirySuccess").html("<p>Enquiry <br><br>We recieved your enquiry.  <br><br> An advisor will respond to you in English, French or Mandarin <br> <br> within 24 hours, from Monday to Saturday.</p>")
		}else if(language == "fr"){
			$("#search").attr("placeholder","CHERCHER");
			$("#agreementEmailSub").html("J'ai lu, compris et accepté le  <a>Politique de confidentialité</a> et le  <br> <a> Conditions d'utilisation </a>")	;
			$("#commentTextArea").attr("placeholder","COMMENTAIRE");
			$("#enquirySuccess").html("<p>Enquête <br><br>Nous avons reçu votre demande.  <br><br> Un conseiller vous répondra en anglais, français ou mandarin <br> <br> dans les 24 heures, du lundi au samedi.</p>")
		}else if(language == "zh"){
			$("#search").attr("placeholder","搜索");
			$("#agreementEmailSub").html("我已阅读理解并同意  <a>隐私政策</a> 以及  <br> <a>使用条款</a>")	;
			$("#commentTextArea").attr("placeholder","留言");
			$("#enquirySuccess").html("<p>请求 <br><br>我们收到了您的请求.  <br><br> 顾问将在周一至周六的24小时内以英文，法文或普通话 <br> <br> 回复您</p>")

		}

}

$("#EN").on('click',function(){
language = "en"
//save language
//console.log("come to this point");
saveLanguage(language);
console.log(language);
//apply language
applyLanguage();
});

$("#FR").on('click',function(){
language = "fr";
saveLanguage(language);
applyLanguage();
});

$("#CN").on('click',function(){
language = "zh";
//save language
saveLanguage(language);
console.log(language);
//apply language
applyLanguage();
});


function disableAndSetStyle(language){
	console.log(language);
	resetDefault();
	console.log(language == 'en');
	if(language == "en"){
		document.getElementById("EN").disabled = true;
		console.log(document.getElementById("EN"));
		$("#EN").css("text-decoration","none");
		$("#EN").css("color","red");
	}else if(language == "fr"){
		document.getElementById("FR").disabled = true;
		$("#FR").css("text-decoration","none");
		$("#FR").css("color","red");
	}else if(language == "zh"){
		document.getElementById("CN").disabled = true;
		$("#CN").css("text-decoration","none");
		$("#CN").css("color","red");
	}
}

function resetDefault(){
	document.getElementById("FR").disabled = false;
	document.getElementById("CN").disabled = false;
	document.getElementById("EN").disabled = false;
	$("#EN").css("text-decoration","underline");
	$("#EN").css("color","grey");
	$("#FR").css("text-decoration","underline");
	$("#FR").css("color","grey");
	$("#CN").css("text-decoration","underline");
	$("#CN").css("color","grey");
}
