import Header from '@/components/Header'
import Hero from '@/components/Hero'
import bgCalender from '../assets/BG-calendrier.jpg'
import CalenderList from '@/components/CalenderList'
import { Button } from '@/components/ui/button'
import Actuality from '@/components/Actualités'
import Rankings from '@/components/Rankings'
import { MemberForm } from '@/components/MemberForm'
import { Footer } from '@/components/Footer'
import NavMobile from '@/components/NavMobile'
import { useEffect, useState } from 'react'
import slide12Origine from "../assets/event.jpg"
import Loader from '@/components/ui/Loader'
import { Link } from 'react-router-dom'
import Title from '@/components/ui/title'
import MobileCardCarousel from '@/components/MobileCardCarousel'


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
            <Title title="Calendrier"/>
            </div>
            <div style={{ background:`url(${bgCalender})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full bg-[#02abee]  rounded-md relative h-[28rem] justify-start mt-[-29px] flex flex-col items-center'>
      <div className='absolute top-8'>
        <h2 className='text-4xl max-sm:text-2xl font-bold text-white'>Evenements majeurs</h2>
      </div>
      <CalenderList/>
      
    </div>
    <div className='flex justify-center mt-3'>
      <Link to="/calendrier"><Button className='bg-red-500 text-2xl max-sm:text-lg  px-8 py-6 text-white rounded-full'>Calendrier complet</Button></Link>
    
    </div>
    <div className='mx-24 max-sm:mx-6'>
    <Title title="Actualités"/>
            </div>

            <div>
              <div className='mb-12 hidden max-sm:block'>
                <MobileCardCarousel/>
              </div>
              
              <Actuality/>
            </div>
            <div className='flex justify-center max-sm:mt-[-4rem] mt-1'>
              <Link to="/actualites"><Button className='bg-red-500 text-2xl max-sm:text-lg px-8 py-6 text-white rounded-full'>Plus d'actualités</Button></Link>
    
    </div>
    <div>
      <Rankings/>
    </div>
    <div className="relative mb-12  mt-1 max-sm:h-28 h-full flex-2">
          <img
            src={slide12Origine}
            alt="Partie de Scrabble en cours"
            className="rounded-lg object-cover  w-full h-full"
          />
        
        </div>
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
