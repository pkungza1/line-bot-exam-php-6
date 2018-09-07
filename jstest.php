<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
$(function(){
    $("input#Send").click(function(){
        var url="http://192.168.2.41/"; // ไฟล์ที่ต้องการรับค้า
        var dataSet={ name: $("input#name").val(), email: $("input#email").val() }; // กำหนดชื่อและค่าที่ต้องการส่ง
        $.post(url,dataSet,function(data){
            alert("แจ้งเเมื่อทำการส่งข้อมูลเรียบร้อยแล้ว");
         });
    });
});
</script>