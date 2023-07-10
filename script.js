let column = 1;
let type = 1;
let addingcolumn = document.querySelector(".addbtn");
let allcolumns = document.querySelector(".allcolumns");
addingcolumn.addEventListener("click",()=>{
   let div = document.createElement("div")
   div.setAttribute("class","columnnames")
   allcolumns.append(div)
    let label = document.createElement("label")
    label.innerText = "column Name";
    div.append(label)
    let inp = document.createElement("input")
    inp.setAttribute("name",column++)
    inp.setAttribute("type","text")
    inp.setAttribute("class","colname")

    div.append(inp)

    let select = document.createElement("select")
    select.setAttribute("class","type")
    select.setAttribute("name",type++)
    div.append(select)

    let option1 = document.createElement("option")
    option1.innerText = "int";
    option1.setAttribute("name","")
    option1.setAttribute("value","int")
    select.append(option1)

    let option2 = document.createElement("option")
    option2.innerText = "varchar";
    option2.setAttribute("name","")
    option2.setAttribute("value","varchar")

    select.append(option2)

    let option3 = document.createElement("option")
    option3.innerText = "DateTime";
    option3.setAttribute("name",type++)
    option3.setAttribute("value","DateTime")

    select.append(option3)

    let option4 = document.createElement("option")
    option4.innerText = "text";
    option4.setAttribute("name",type++)
    option4.setAttribute("value","text")

    select.append(option4)




})
    // <div class="list">
    //                     <label for="">column Name</label>
    //                     <ut type="text" placeholder="Table Name" class="inpname" name="tablename" required>
                        // <select name="type" id="">
                        //     <option value="int" name="dbnames">int</option> 
                        //     <option value="varchar(255)" name="dbnames">varchar(255)</option> 
                        //     <option value="DateTime" name="dbnames">DateTime</option> 
                        //     <option value="text" name="dbnames">text</option> 
                        // </select>
                        // <button class="addbtn">
                        //     Add column
                        // </button>
    //                 </div>