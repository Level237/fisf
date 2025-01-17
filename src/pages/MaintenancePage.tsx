import { HeaderSection } from "@/components/Header-section"
import { NavSection } from "@/components/NavSection"

import { useEffect, useState } from "react"
import Loader from "@/components/ui/Loader"


import NavMobile from "@/components/NavMobile"

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