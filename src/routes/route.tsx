import { createBrowserRouter } from "react-router-dom";
import Homepage from "../pages/Homepage";
import { MissionPage } from "@/pages/MissionPage";

export const routes=createBrowserRouter([
    {
        path:'/',
        element:<Homepage/>
    },{
        path:"/missions",
        element:<MissionPage/>
    }
])