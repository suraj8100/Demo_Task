
function coun()
{   
    var country_id=document.getElementById('country').value;
    document.getElementById('state').innerHTML="";
    document.getElementById('state').innerHTML=`<option>Select State</option>`;

    axios.get(`/getData_state/${country_id}`)
    .then(function(response){
        console.log(response.data);
        response.data.forEach((item) => {
           
            document.getElementById('state').innerHTML+=`<option value="${item.id}">${item.state_name}</option>`;
        });
    })
    .catch(function(error){
        console.log(error);
    })
}

function getCity(id)
{   
    
    axios.get(`/getData_city/${id}`)
    .then(function(response){
        console.log(response.data);
        response.data.forEach((item) => {
            document.getElementById('city').innerHTML+=`<option value="${item.id}">${item.city_name}</option>`;
        });
    })
    .catch(function(error){
        console.log(error);
    })
}

