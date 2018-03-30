
### 執行下列程式並在瀏覽器端顯示所收到的cookies值為何?

```
<script type="text/javascript">
function SetCookie(name, value) { 
    var Days = 30;  
    var exp = new Date();  
    exp.setTime(exp.getTime() + 60 * 100);//過期時間 1分鐘 
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();  
}  

function submit() {
	if(getCookie('submit')) {
		alert('you haved submited before,please submit after one minute');
	} else {
		SetCookie('submit','yes');
	}
	
}

function getCookie(name)
{
var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
if(arr=document.cookie.match(reg))
return unescape(arr[2]);
else
return null;
}
</script>
<button onclick='submit()'>送出</button>
```
