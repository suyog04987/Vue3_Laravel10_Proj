import axios from "axios";


export const registerTeams = async(uri,formData)=>{
    const baseURL = import.meta.env.VITE_APP_URL+uri;
    try{
        const response = await axios.post(baseURL,formData);
        return response.data;
        
    }catch(error){
        throw error;
    }
};