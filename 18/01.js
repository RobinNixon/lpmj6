<script>
  function asyncRequest()
  {
    try // Non IE Browser?
    {   // Yes
      var request = new XMLHttpRequest()
    }
    catch(e1)
    {
      try // IE 6+?
      {   // Yes
        request = new ActiveXObject("Msxml2.XMLHTTP")
      }
      catch(e2)
      {
        try // IE 5?
        {   // Yes
          request = new ActiveXObject("Microsoft.XMLHTTP")
        }
        catch(e3) // There is no asynchronous support
        { 
          request = false
        }
      }
    }
    return request
  }
</script>
