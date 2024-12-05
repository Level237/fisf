import { createBrowserRouter } from "react-router-dom";
import Homepage from "../pages/Homepage";
import { MissionPage } from "@/pages/MissionPage";
import { ComitePage } from "@/pages/ComitePage";

export const routes=createBrowserRouter([
    {
        path:'/',
        element:<Homepage/>
    },{
        path:"/missions",
        element:<MissionPage/>
    },{
        path:"/comités",
        element:<ComitePage/>
    }
])