import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"
import slide from "../assets/BG-calendrier.jpg"
import { Footer } from "@/components/Footer"
import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"
import AlaUneComponent from "@/components/AlaUneComponent"
import Blog from "@/components/Blog"
import { Button } from "@/components/ui/button"
import NavMobile from "@/components/NavMobile"
import Title from "@/components/ui/title"
import MaintenanceComponent from "@/components/maintenance-component"
export const MaintenancePage=()=>{
    const [loading, setLoading] = useState(true);

    useEffect(() => {
  
      const fetchData = async () => {
  
        await new Promise(resolve => setTimeout(resolve, 1500));
        setLoading(false);
      };
  
      fetchData();
    }, []);
    return (
       <>
       {!loading &&  <section>
            <section className="flex flex-col">
                    <HeaderSection/>
                    <NavMobile/>
                    <NavSection/>
            </section>
            
        <MaintenanceComponent/>
            
          
            
           
        </section>}

        {loading && <Loader/>}
       </>
    )
}