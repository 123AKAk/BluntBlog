    //runs all javascript methods 

    $( "#anewslettre-form" ).submit(function( event ) 
    {
        var aemail = $( "#anewsletteremail" ).val();
        
        let formdata = new FormData();
        formdata.append("email", $( "#anewsletteremail" ).val());

        let loca = "assets/subnewsletter.php";
        fetch(loca, { method: "POST", body: formdata })
        .then(res => res.text())
        .then(data => 
        {
            var result = JSON.parse(data);
            $( "$amsgspan" ).text( result.message ).show().fadeOut( 5000 );
        });
            
        event.preventDefault();
    }); 
    
    $( "#bnewslettre-form" ).submit(function( event ) 
    {
        var aemail = $( "#bnewsletteremail" ).val();
        
        let formdata = new FormData();
        formdata.append("email", $( "#bnewsletteremail" ).val());

        let loca = "assets/subnewsletter.php";
        fetch(loca, { method: "POST", body: formdata })
        .then(res => res.text())
        .then(data => 
        {
            var result = JSON.parse(data);
            $( "#bmsgspan" ).text( result.message ).show().fadeOut( 5000 );
        });
            
        event.preventDefault();
    }); 

    $( ".search-form" ).submit(function( event ) 
    {
        var keywrd = $( "#searchkeyword" ).val();
        window.location.href = "search.php?keywrd="+keywrd;
        event.preventDefault();
    }); 

    $( "#editprofileform" ).submit(function( event ) 
    {
        var uid = $( "#uid" ).val();
        var username = $( "#accountusername" ).val();
        var email = $( "#accountemail" ).val();
        
        let formdata = new FormData();
        formdata.append("namespace", "info");
        formdata.append("username", username);
        formdata.append("email", email);
        formdata.append("userid", uid);

        let loca = "assets/updateuserprofile.php";
        fetch(loca, { method: "POST", body: formdata })
        .then(res => res.text())
        .then(data => 
        {
            var result = JSON.parse(data);
            if(result.response == true)
            {
                alertify.success(result.message);
                // alertify.alert(result.message, function(){
                //     alertify.message('OK');
                // });
                setTimeout(function(){
                    window.location.reload(1);
                 }, 2500);
            }
            else
            {
                alertify.error(result.message);
            }
        });
            
        event.preventDefault();
    });

    $( "#passwordeditprofileform" ).submit(function( event ) 
    {
        var uid = $( "#uid" ).val();
        var newpassword = $( "#accountnewpassword" ).val();
        var confrimpassword = $( "#accountconfrimpassword" ).val();
        var oldpassword = $( "#accountoldpassword" ).val();

        if(newpassword === confrimpassword)
        {
            let formdata = new FormData();
            formdata.append("namespace", "passinfo");
            formdata.append("password", newpassword);
            formdata.append("oldpassword", oldpassword);
            formdata.append("userid", uid);

            let loca = "assets/updateuserprofile.php";
            fetch(loca, { method: "POST", body: formdata })
            .then(res => res.text())
            .then(data => 
            {
                var result = JSON.parse(data);
                if(result.response == true)
                {
                    alertify.success(result.message);
                    // alertify.alert(result.message, function(){
                    //     alertify.message('OK');
                    // });
                }
                else
                {
                    alertify.error(result.message);
                }
            });
        }
        else
        {
            alertify.error("New Passwords are not the same");
        }
            
        event.preventDefault();
    }); 

    function savepost(postid, userid)
    {
        var realpostid = $(postid).val();
        var realuserid = $(userid).val();
        
        $.post('assets/savepage.php', {
            namespace: "save",
            userid: realuserid,
            postid: realpostid
        },
        function(data) 
        {
            var result = JSON.parse(data);
            if(result.response == true)
            {
                $( "#savepost" ).replaceWith("<a title='Remove from Saved' href='javascript:void(0);' onclick='unsavepost('#realpostid', '#realuserid');' id='savepost'><i class='fas fa-save'></i> Saved </a>");
            }
        });
    }
    function unsavepost(postid, userid)
    {
        var realpostid = $(postid).val();
        var realuserid = $(userid).val();
        
        $.post('assets/savepage.php', {
            namespace: "unsave",
            userid: realuserid,
            postid: realpostid
        },
        function(data) 
        {
            var result = JSON.parse(data);
            if(result.response == true)
            {
                $( "#savepost" ).replaceWith("<a title='Add to Saved' href='javascript:void(0);' onclick='savepost('#realpostid', '#realuserid');' id='savepost'><i class='fas fa-save'></i> Save </a>");
            }
        });
    }

    function followauthor(authorid, userid)
    {
        var realuserid = $(userid).val();
        var realauthorid = $(authorid).val();
        
        $.post('assets/followauth.php', {
            namespace: "follow",
            userid: realuserid,
            authorid: realauthorid
        },
        function(data) 
        {
            var result = JSON.parse(data);
            if(result.response == true)
            {
                $( "#followauth" ).replaceWith("<a title='Unfollow' href='javascript:void(0);' onclick='unfollowauthor('#authorid', '#realuserid');' id='followauth'> Unfollow </a>");
            }
        });
    }
    function unfollowauthor(authorid, userid, num)
    {
        var realuserid = $(userid).val();
        var realauthorid = $(authorid).val();
        
        $.post('assets/followauth.php', {
            namespace: "unfollow",
            userid: realuserid,
            authorid: realauthorid
        },
        function(data) 
        {
            var result = JSON.parse(data);
            if(result.response == true)
            {
                $( "#followauth"+num ).replaceWith("<a title='Follow' href='javascript:void(0);' onclick='followauthor('#authorid', '#realuserid');' id='followauth"+num+"'> Follow </a>");
            }
        });
    }

    function aunfollowauthor(authorid, userid, num)
    {
        var realuserid = $(userid).val();
        var realauthorid = $(authorid).val();
        
        $.post('assets/followauth.php', {
            namespace: "unfollow",
            userid: realuserid,
            authorid: realauthorid
        },
        function(data) 
        {
            var result = JSON.parse(data);
            if(result.response == true)
            {
                location.reload();
            }
        });
    }
    
    /**
     * 
     * JQUERY AJAX METHODS
     * { AjaxOnBegin, AjaxOnSucess, AjaxOnComplete, AjaxOnfailure }
     * 
    **/
    // main.AjaxOnAddingSucess = function AjaxOnSucess(result) 
    // {
    //     //alert(result);
    //     var suq = JSON.parse(result);

    //     if (suq.response == true) 
    //     {
    //         //alertify.set({ delay: 90000 });
    //         alertify.success(suq.message);
    //     }
    //     else
    //     {
    //         alertify.error(suq.message);
    //     }
    // }
    // main.AjaxOnSettingAdded = function AjaxOnSettingAdded(result) {
    //     // alert(result);
    //     var suq = JSON.parse(result);

    //     alertify.set({ delay: 10000 });
    //     if (suq.response == true) 
    //     {
    //         alertify.success('Added successfully');
    //     } else {
    //         alertify.error(suq.message);
    //     }
    // }
    // main.AjaxOnSettingUpdate = function AjaxOnSettingUpdate(result) {
    //     alert(result);
    //     var suq = JSON.parse(result);

    //     alertify.set({ delay: 10000 });
    //     if (suq.response == true) 
    //     {
    //         alertify.success('Updated successfully');
    //     } 
    //     else
    //     {
    //         alertify.error(suq.message);
    //     }
    // }
    // main.AjaxOnUpdateSucess = function AjaxOnSucess(result) {
    //     var suq = JSON.parse(result);

    //     alertify.set({ delay: 50000 });
    //     alertify.success('Update successful');
    //     if (suq != "")
    //     {
    //         alertify.log('redirecting...');
    //         //window.location.href = suq.message;
    //     }
    // }
    // main.AjaxOnComplete = function AjaxOnComplete() {
        
    // }
    // main.AjaxOnBegin = function AjaxOnBegin() {

    // }
    // main.AjaxOnfailure = function AjaxOnfailure() {
    //     alertify.error("Task failed successfully (no comments).");
    // }


