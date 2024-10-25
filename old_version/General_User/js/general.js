var mainNavbar = document.getElementById('mainNavbar');
var addAccount = document.getElementById('addAccount')
var mainBody = document.getElementById('mainBody');
var gettingUserLocal = localStorage.getItem('userLocal');
var userLocal = JSON.parse(gettingUserLocal);
console.log(userLocal);

if (userLocal.loginType == "student") {
    $('a[href="addStudent.html"]').remove();
    $('a[id="navbardrop"]').remove();
}

if (userLocal.loginType == "superUser"){
    mainNavbar.innerHTML += `
    <a class="dropdown-item"  href="pendingAccounts.html"> Pending Accounts </a>
    <a class="dropdown-item"  href="approvedAccounts.html"> Approved Accounts </a>
    <a class="dropdown-item"  href="rejectedAccounts.html"> Rejected Accounts </a>
    `;

    addAccount.innerHTML += `
    <a class="nav-link"  href="addUser.html"> Add Account </a> `;

}