
import { Link, NavLink } from "react-router-dom"
import slide from "../assets/slide01.jpg"
import slideMobile from "../assets/slide-mobile.jpg"
import { Separator } from './ui/separator'
import React from "react";
import { AnimatePresence,motion } from "framer-motion";
export default function Hero() {

  const [isHovered, setIsHovered] = React.useState(false);
  return (
   <>
    <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full max-sm:hidden z-10  bg-[#02abee]  rounded-md relative h-[85vh] justify-start pt-20 flex flex-col items-center'>
  <div className='absolute bg-[#00723e] h-24 flex gap-5 flex-row justify-center items-center px-12 border border-white border-[0.1rem]  top-[-2rem] z-[9999] '>
          <div className=''>
            <div onMouseEnter={() => setIsHovered(true)}
                onMouseLeave={() => setIsHovered(false)} className='flex relative  flex-row justify-between items-end gap-8'>
                <NavLink 
                
                to="/" className='text-2xl cursor-pointer font-semibold text-white'>La FISF</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical'/>
                <AnimatePresence>
          {isHovered && (
            <motion.div
              initial={{ opacity: 0, y: 10 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{ opacity: 0, y: 10 }}
              transition={{ duration: 0.2 }}
              className="absolute top-[2rem] left-[-6rem] w-48 bg-[#00723e] border border-white border-[0.1rem] shadow-lg py-2 z-50"
            >
              
                <Link
                  key={"mot-president"}
                  to={"/mot-du-president"}
                  className="block px-4 py-2 text-sm text-white font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Mot du président
                </Link>
                <Link
                  key={"mission"}
                  to={"/missions"}
                  className="block px-4 py-2 text-sm text-white font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Mission
                </Link>
                <Link
                  key={"comites"}
                  to={"/comites"}
                  className="block px-4 py-2 text-sm text-white font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Comités
                </Link>
                <Link
                  key={"pays"}
                  to={"/pays-affilies"}
                  className="block px-4 py-2 text-sm text-white font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Pays Affiliés
                </Link>
            </motion.div>
          )}
        </AnimatePresence>
            </div>
          </div>
          <div className=''>
              <div className='flex flex-row justify-between items-end gap-8'>
                  <NavLink to="/actualites" className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Actualités</NavLink>
                    <Separator className='bg-white h-7 w-1' orientation='vertical' />
                </div>
              
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <NavLink to="/calendrier" className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Calendrier</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <NavLink to="/classements" className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Classement</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Evènements</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Forum</h2>
                
            </div>
          </div>
</div>
  </div>
  <div  style={{ background:`url(${slideMobile})`,backgroundPosition:"bottom",backgroundSize:"cover",backgroundRepeat:"no-repeat" }}  className='hidden w-full  max-sm:block z-10  bg-[#02abee]  rounded-md relative h-[80vh] justify-start '>
    
  </div>
   </>
  )
}
