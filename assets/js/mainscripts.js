    //runs all javascript methods 

    $( ".newslettre-form" ).submit(function( event ) 
    {
        $.post('assets/subnewsletter.php', {
            email: $( "#newsletteremail" ).val()
        },
        function(data) 
        {
            var result = JSON.parse(data);
            if(result.response === true){
                $( ".msgspan" ).text( result.message ).show().fadeOut( 5000 );
                return;
            }
            else{
                $( ".msgspan" ).text( result.message ).show().fadeOut( 5000 );
                return;
            }
        });
        event.preventDefault();
    }); 

    $( ".search-form" ).submit(function( event ) 
    {
        var keywrd = $( "#searchkeyword" ).val();
        window.location.href = "search.php?keywrd="+keywrd;
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
    
    /**
     * 
     * JQUERY AJAX METHODS
     * { AjaxOnBegin, AjaxOnSucess, AjaxOnComplete, AjaxOnfailure }
     * 
    **/
    main.AjaxOnAddingSucess = function AjaxOnSucess(result) 
    {
        //alert(result);
        var suq = JSON.parse(result);

        if (suq.response == true) 
        {
            //alertify.set({ delay: 90000 });
            alertify.success(suq.message);
        }
        else
        {
            alertify.error(suq.message);
        }
    }
    main.AjaxOnSettingAdded = function AjaxOnSettingAdded(result) {
        // alert(result);
        var suq = JSON.parse(result);

        alertify.set({ delay: 10000 });
        if (suq.response == true) 
        {
            alertify.success('Added successfully');
        } else {
            alertify.error(suq.message);
        }
    }
    main.AjaxOnSettingUpdate = function AjaxOnSettingUpdate(result) {
        alert(result);
        var suq = JSON.parse(result);

        alertify.set({ delay: 10000 });
        if (suq.response == true) 
        {
            alertify.success('Updated successfully');
        } 
        else
        {
            alertify.error(suq.message);
        }
    }
    main.AjaxOnUpdateSucess = function AjaxOnSucess(result) {
        var suq = JSON.parse(result);

        alertify.set({ delay: 50000 });
        alertify.success('Update successful');
        if (suq != "")
        {
            alertify.log('redirecting...');
            //window.location.href = suq.message;
        }
    }
    main.AjaxOnComplete = function AjaxOnComplete() {
        
    }
    main.AjaxOnBegin = function AjaxOnBegin() {

    }
    main.AjaxOnfailure = function AjaxOnfailure() {
        alertify.error("Task failed successfully (no comments).");
    }


