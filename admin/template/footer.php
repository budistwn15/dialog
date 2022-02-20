<footer></footer>
</body>
<script type="text/javascript">
function liveSearch(){
    var input,filter,tbody,tr,td,i,
    input = document.getElementById("myInput");
    filter  = input.value.toUpperCase();
    tbody = document.getElementById("myTable");
    tr = tbody.getElementsByTagName("tr");

    for(i = 0; i < tr.length; i++){
        td = tr[i].getElementsByTagName("td")[1];
        if(td){
            if(td.innerHTML.toUpperCase().indexOf(filter) >- 1){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        } .0
    }
}
function dropdown(x) {
    x.classList.toggle("change");
}
</script>
</html>
