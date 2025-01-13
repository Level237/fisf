import { createBrowserRouter } from "react-router-dom";
import Homepage from "../pages/Homepage";
import { MissionPage } from "@/pages/MissionPage";
import { CommiteePage } from "@/pages/CommiteePage";
import AfiliateCountry from "@/pages/AfiliateCountryPage";
import { GetCountryAfiliatePage } from "@/pages/GetCountryAfiliatePage";

export const routes=createBrowserRouter([
    {
        path:'/',
        element:<Homepage/>
    },{
        path:"/missions",
        element:<MissionPage/>
    },{
        path:"/comites",
        element:<CommiteePage/>
    },{
        path:"/pays/affiliés",
        element:<AfiliateCountry/>
    },{
        path:'/pays/affiliés/:country',
        element:<GetCountryAfiliatePage/>
    }
])