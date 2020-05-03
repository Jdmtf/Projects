<?php include('php/header.php'); ?>

<html>



    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--says edge of website should follow edge of device, initial scale means the site should scale the content -->
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="styles/style.css">
</head>
<body onload="resumesession()">

    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
    <div id = "productslist" style = "display:inline">
        <div class ="form">

            <label for="duration">duration:</label>

            <select id="duration">
                <option value="none">none</option>
                <option value="<6m"><6m</option>
                <option value="12m">12m</option>
                <option value="24m">24m</option>
                <option value=">24m">>24m</option>
            </select>
            <label for="type">type:</label>
            <select id="type">
                <option value="none">none</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value=">D">D</option>
            </select>
            <label for="experience">experience:</label>
            <select id="experience">
                <option value="none">none</option>
                <option value="Low">Low</option>
                <option value="Mid">Mid</option>
                <option value="Pro">Pro</option>
            </select>

            <div>
                Search:<input type="text" id ="search">
                <button type="submit" onclick="search()">-></button>

            </div>
        </div>
        <br> 
        <div>Products </div>
        <table id="producttable" style="width: 80%; display: in-line">
            <tr style="display: block">
                <th>&nbsp;</th>
                <th>Image</th>
                <th>Name</th>
                <th>Company</th>
                <th>Duration</th>  
                <th>Type</th>
                <th>Experience</th>
                <th>Price</th>
                <th>View</th>
            </tr >
            <tr id = "row1" style= "display:none">
                <td id = "Tag1">1</td>
                <td><img id= "Image1" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name1"></td>
                <td id="company1"></td>
                <td id="duration1"></td>
                <td id="type1"></td>
                <td id="experience1"></td>
                <td id="price1"></td>
                <td id="add1"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View1()"></a></td>
            </tr>

            <tr id = "row2" style= "display:none">
                <td id = "Tag2">2</td>
                <td><img id= "Image2" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name2"></td>
                <td id="company2"></td>
                <td id="duration2"></td>
                <td id="type2"></td>
                <td id="experience2"></td>
                <td id="price2"></td>
                <td id="add2"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View2()"></a></td>  
            </tr>
            <tr id = "row3" style= "display:none">
                <td id = "Tag3">3</td>
                <td><img id= "Image3" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name3"></td>
                <td id="company3"></td>
                <td id="duration3"></td>
                <td id="type3"></td>
                <td id="experience3"></td>
                <td id="price3"></td>
                <td id="add3"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View3()"></a></td>
            </tr >
            <tr id = "row4" style= "display:none">
                <td id = "Tag4">4</td>
                <td><img id= "Image4" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name4"></td>
                <td id="company4"></td>
                <td id="duration4"></td>
                <td id="type4"></td>
                <td id="experience4"></td>   
                <td id="price4"></td>
                <td id="add4"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View4()"></a></td>
            </tr>
            <tr id = "row5" style= "display:none">
                <td id = "Tag5">5</td>
                <td><img id= "Image5" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name5"></td>
                <td id="company5"></td>
                <td id="duration5"></td>
                <td id="type5"></td>
                <td id="experience5"></td>
                <td id="price5"></td>
                <td id="add5"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View5()"></a></td>
            </tr>
            <tr id = "row6" style= "display:none">
                <td id = "Tag6">6</td>
                <td><img id= "Image6" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name6"></td>
                <td id="company6"></td>
                <td id="duration6"></td>
                <td id="type6"></td>
                <td id="experience6"></td>
                <td id="price6"></td>
                <td id="add6"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View6()"></a></td>
            </tr>
            <tr id = "row7" style= "display:none">
                <td id = "Tag7">7</td>
                <td><img id= "Image7" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name7"></td>
                <td id="company7"></td>
                <td id="duration7"></td>
                <td id="type7"></td>
                <td id="experience7"></td>
                <td id="price7"></td>
                <td id="add7"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View7()"></a></td>
            </tr>
            <tr id = "row8" style= "display:none">
                <td id = "Tag8">8</td>
                <td><img id= "Image8" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name8"></td>
                <td id="company8"></td>
                <td id="duration8"></td>
                <td id="type8"></td>
                <td id="experience8"></td>
                <td id="price8"></td>
                <td id="add8"><a href='product.html'><img src="images/arrow3.png" alt="->" width="100" height="60" onclick="View8()"></a></td>
            </tr>
        </table >
        <div><button onclick="subtract()"><-</button>
            <input type="text" id="productmin" value="0"><button onclick="add()">-></button></div>
    </div>

    <div id="table-scroll" align="right">
        <table>
            <td> <a href='Basket.html'><img src="basket.png" alt="->" width="100" height="60"></a> </td>
            <td> Cost: <div id="Cost">0</div> 
            <tr><th>Image</th><th>Name</th><th>Price</th><th>X</th>
        </table>
    </div>
    </div>
    <script src="scripts/Items.js"></script>
    <script src="scripts/Products.js"></script>
    <script src="scripts/Basket.js"></script>
//
</body>
</html>