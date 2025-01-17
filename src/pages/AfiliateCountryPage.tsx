import { HeaderSection } from '@/components/Header-section'
import { NavSection } from '@/components/NavSection'
import slide from "../assets/slideAfiliate.png"
import AfiliateCountryList from '@/components/AfiliateCountryList'
import { Footer } from '@/components/Footer'
import NavMobile from '@/components/NavMobile'
import { useEffect, useState } from 'react'
import Loader from '@/components/ui/Loader'
import Title from '@/components/ui/title'
export default function AfiliateCountry() {

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
    <NavMobile/>
            <HeaderSection/>
            <NavSection/>
    </section>
      <section className='mx-36 max-sm:mx-2  py-20'>
            <Title title="Les Pays Affiliés"></Title>
      </section>

      <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

    <section className="flex flex-col mt-12 max-sm:ml-3 mb-12 ml-36">
        <AfiliateCountryList/>
    </section>
    <Footer/>
    </section>}

    {loading && <Loader/>}
   </>
  )
}
