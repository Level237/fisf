import { createBrowserRouter } from "react-router-dom";
import Homepage from "../pages/Homepage";
import { MissionPage } from "@/pages/MissionPage";
import { CommiteePage } from "@/pages/CommiteePage";
import AfiliateCountry from "@/pages/AfiliateCountryPage";
import { GetCountryAfiliatePage } from "@/pages/GetCountryAfiliatePage";
import { MotduPresidentPage } from "@/pages/MotduPresidentPage";
import { ActualityPage } from "@/pages/ActualityPage";
import { BlogDetailPage } from "@/pages/BlogDetailPage";
import { CalendrierPage } from "@/pages/CalendrierPage";


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
    },{
        path:"mot-du-president",
        element:<MotduPresidentPage/>
    },
    {
        path:"Actualités",
        element:<ActualityPage/>
    },
    {
        path:"actualités/nouveau-president",
        element:<BlogDetailPage/>
    },
    {
        path:"calendrier",
        element:<CalendrierPage/>
    }
])