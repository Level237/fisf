import Header from '@/components/Header'
import Hero from '@/components/Hero'
import bgCalender from '../assets/BG-calendrier.jpg'
import CalenderList from '@/components/CalenderList'
import { Button } from '@/components/ui/button'
import Actuality from '@/components/Actualités'
import Rankings from '@/components/Rankings'
import Figures from '@/components/figures'
import Partenariat from '@/components/Partenariat'
import { MemberForm } from '@/components/MemberForm'
import { Footer } from '@/components/Footer'
import NavMobile from '@/components/NavMobile'
import { useEffect, useState } from 'react'
import Loader from '@/components/ui/Loader'


export default function Homepage() {
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
  {!loading &&   <section className='overflow-x-hidden'>
     <NavMobile/>
      <Header/>

      <Hero/>
      <section className='py-12  flex flex-col gap-12'>
            <div className='flex flex-row items-center justify-center'>
                    <h2 className='text-2xl max-sm:text-lg text-center tracking-tight max-w-2xl'>La Fédération Internationale de Scrabble® Francophone (FISF) 

promeut la pratique du Scrabble® en langue française, 

et lui apporte un cadre réglementaire applicable

dans toute la Francophonie.</h2>
            </div>

            <div className='mx-24 max-sm:mx-6 '>
              <h2 className='text-[#00723e] max-sm:text-2xl text-3xl font-bold'>Calendrier</h2>
            </div>
            <div style={{ background:`url(${bgCalender})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full bg-[#02abee]  rounded-md relative h-[28rem] justify-start pt-20 flex flex-col items-center'>
      <div className='absolute top-8'>
        <h2 className='text-4xl max-sm:text-2xl font-bold text-white'>Evenements majeurs</h2>
      </div>
      <CalenderList/>
      
    </div>
    <div className='flex justify-center mt-10'>
    <Button className='bg-red-500 text-2xl max-sm:text-lg  px-8 py-6 text-white rounded-full'>Calendrier complet</Button>
    </div>
    <div className='mx-24 max-sm:mx-6'>
              <h2 className='text-[#00723e] text-3xl max-sm:text-2xl  font-bold'>Actualités</h2>
            </div>

            <div>
              <Actuality/>
            </div>
            <div className='flex justify-center mt-1'>
    <Button className='bg-red-500 text-2xl max-sm:text-lg px-8 py-6 text-white rounded-full'>Plus d'actualités</Button>
    </div>
    <div>
      <Rankings/>
    </div>
          <section className='w-full bg-[#00723e59] px-6 py-14 flex flex-col items-center'>
            <div>
              <h2 className='text-[#00723e] text-3xl max-sm:text-2xl font-bold'>La FISF en quelque chiffres</h2>
            </div>
           
              <Figures/>
              <div className='mt-12'>
              <h2 className='text-[#00723e] text-3xl  font-bold'>Nos Partenaires</h2>
            </div>
            <Partenariat/>
            <div className='mt-6'>
            <Button 
                        className="w-full text-lg md:w-auto bg-[#00723e] text-white rounded-full py-6 px-8"
                        >
                        Classement complet
                        </Button>
            </div>
          </section>
          <section>
            <MemberForm/>
          </section>
      </section>
     <Footer/>
    </section>}

    {loading && <Loader/>}
  </>
  )
}
