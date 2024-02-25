<template >
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Registration Form
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="registerTeam">
                            <div class="form-group">
                                <label for="clubName">Club Name</label>
                                <input v-model="formData.clubName" type="text" class="form-control" id="clubName" placeholder="Enter club name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input v-model="formData.email" type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input v-model="formData.address" type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input v-model="formData.phone" type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="selectBox">League</label>
                                <select v-model="formData.league" class="form-control" id="selectBox">
                                    <option value="">Select an option</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue';
import {registerTeams} from '../api';

const formData = ref({
    clubName:'',
    email:'',
    address:'',
    phone:'',
    league:''

});
const registerTeam = async () =>{
    try{
        await registerTeams('team-registration',formData.value).then(res=>{
            console.log(res);
            alert(res.message);
        });
        formData.value.clubName='';
        formData.value.email='';
        formData.value.address='';
        formData.value.phone='';
        formData.value.league='';

    }catch(error){
        console.log(error);
    }
};


</script>