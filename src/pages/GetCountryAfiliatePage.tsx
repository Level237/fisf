
import { Footer } from "@/components/Footer";
import { HeaderSection } from "@/components/Header-section";
import NavMobile from "@/components/NavMobile";
import { NavSection } from "@/components/NavSection";
import Loader from "@/components/ui/Loader";
import slide from "../assets/slideAfiliate.png"
import { useEffect, useState } from "react";
import Title from "@/components/ui/title";
import { useParams } from "react-router-dom";
import TooltipChildren from "@/components/ui/TooltipChildren";
import algeria from "../assets/algeria.png"
export  const GetCountryAfiliatePage=()=>{
   

    const [loading, setLoading] = useState(true);
    const {country}=useParams();
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
      <NavMobile/>
              <HeaderSection/>
              <NavSection/>
      </section>
        <section className='mx-36 max-sm:mx-2  py-20'>
              <Title title={`Pays Affilié ${country}`}></Title>
        </section>
  
        <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
      className='w-full z-10 mt-5 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>
  
      </div>
  
      <section className="flex flex-col mt-12 max-sm:ml-3 mb-12 ml-36">
      <div className='  max-sm:mb-8 max-sm:grid-cols-3 grid-cols-8 gap-4'>
                    <div >
                        <TooltipChildren title="Algeria"><img src={algeria} className="w-20 h-20 object-cover rounded-3xl" alt="" /></TooltipChildren>
                        
                    </div>
            </div>
      </section>
      <Footer/>
      </section>}
  
      {loading && <Loader/>}
     </>

    )
}