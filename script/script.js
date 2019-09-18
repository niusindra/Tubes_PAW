function hamburgerFunc() {
    document.getElementById('sidebar').classList.toggle("animationSideBar")
    document.getElementById('navbar').classList.toggle("animationNavbar")
    document.getElementById('dashboardData').classList.toggle("animationDashboardData")
}

function displaySearch(e) {
    console.log(e)
    if(e.keyCode === 13) {
        var elm= document.getElementById('searchInput')
        alert('You are search for text "'+ elm.value + '"')
    }
}

function submit() {
    document.getElementById("myForm").reset();
}

function verification()  
{  
    var x= document.formUser.email.value;
    var atposition= x.indexOf("@");
    var dotposition= x.lastIndexOf(".");
    var letters = /^[A-Za-z]+$/;
    var nama= document.formUser.nama.value;
    var number= document.formUser.number.value;

    if(nama.match(letters))
    {
        
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
        {
            if (isNaN(number))
            {
                    alert("Nomor Handphone hanya angka!")
                    return false;  
            }else
            {
                return true;
            }
        }else
        {
            alert("Email tidak valid!")
            return false;
        }
    }
    else
    {
        alert('Nama tidak boleh mengandung angka!');
        return false;
    }
}

function verification2()  
{  
    var x= document.formUser1.email.value;
    var atposition= x.indexOf("@");
    var dotposition= x.lastIndexOf(".");
    var letters = /^[A-Za-z]+$/;
    var nama= document.formUser1.nama.value;
    var number= document.formUser1.number.value;

    if(nama.match(letters))
    {
        
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
        {
            if (isNaN(number))
            {
                    alert("Nomor Handphone hanya angka!")
                    return false;  
            }else
            {
                return true;
            }
        }else
        {
            alert("Email tidak valid!")
            return false;
        }
    }
    else
    {
        alert('Nama tidak boleh mengandung angka!');
        return false;
    }
}