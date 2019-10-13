<div class="sideBar pure-u-5-24">
    <div class="inside ">
         <div id="sideBarTitle">
             <font ><?php echo getSideBarName(); ?> </font>
         </div>

        <div class="menu">
            <span>Save your phone :</span>
            <form action="savePhone.php" method="post">
                <input type="text" name="phone" class="phone"/>
                <button class="saveBtn">Save</button>
                <button class="clearBtn">Clear</button>
            </form>
        </div>

        <div class="menu">
            <span>search contact :</span>
            <form action="searchContact.php" method="get" id="searchForm">
                <input type="text" name="searchCont" class="searchCont"/>
                <button id="searchBtn">Search</button>
            </form>
            <div class="result"></div>
        </div>

    </div>
</div>