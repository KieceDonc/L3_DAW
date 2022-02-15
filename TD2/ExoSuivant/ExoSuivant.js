function Exercice2(){
    // let item = $('item:contains("sucre")').text("Miel");
    $("item:first").remove();
}

function Exercice3(){
    $("items").append("<item>Confiture</item>")
    $("item.important").prepend("+ ")
}

function Exercice4(){
    const items = document.querySelectorAll("item");
    
    items.forEach(element => {
        element.style.backgroundColor="rgb(215,102,107)"
        element.style.fontstyle="italic"

        let start, end, between;
        start = 0;
        end = element.innerHTML.length;
        if(element.innerHTML.includes("+")){
            between = 2;
        }else{
            between = 0;
        }
        element.innerHTML = element.innerHTML.substring(start,between)+element.innerHTML.charAt(between).toUpperCase()+element.innerHTML.substring(between+1,end);
    });
}

function Exercice5(){

   $("item").on('mouseover click dlclick keypress mousedown mouseenter mousemove mouseout mouseup',function (event){
        let text = $(this).text();
        let status = $(this).attr("class") ?? ""
        let type = event.type

        $("list > div").remove();
        $("list").append(`
        <div>
            Item : ${text}<br>
            Statut : ${status}<br>
            évènement : ${type}<br>
        </div>`
        )
   })
}

function Exercice6(){
    $("item").on("click",function(){
        $(this).animate({width:"0px"},1000,function(){
            $(this).remove()
        });
    })
}

function Exercice7(){
    $("#new button").click(()=>{
        $("#add").show()
        $("#new").hide()
    })

    $("#add button").click(()=>{
        const calue = $("#add input").val();
        $("items").append("<item>"+value+"</item>")
        $("#add").hide()
        $("#new").show()
    })
}

$(document).ready(()=>{
    /*Exercice2();
    Exercice3();
    Exercice4();
    Exercice5();
    Exercice6();*/
    Exercice7();
})