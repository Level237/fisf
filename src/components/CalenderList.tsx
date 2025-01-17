
import { Separator } from './ui/separator'

export default function CalenderList() {

    const calenderList=[
        {
            id:1,
            date:"15/01/2025",
            title:"🇧🇪 SCRADJIBLOUX A -LAPLANTALETTRES B",
            link:"/"
        },
        {
            id:2,
            date:"19/01/2025",
            title:"🇧🇪 Championnat de Belgique",
            link:"/"
        },
        {
            id:3,
            date:"25-26/01/2025",
            title:"🏴󠁣󠁡󠁱󠁣󠁿 Tournoi ADM-MCM Québec",
            link:"/"
        },
        {
            id:4,
            date:"12-16/03/2025",
            title:"🇨🇲 Super Master Scrabble",
            link:"/"
        }
    ]
  return (
    <div className='bg-gray-300 max-sm:w-full  absolute max-sm:block max-sm:bottom-0 bottom-[-2rem] max-sm:px-3     px-16 py-16  flex flex-col items-center justify-center'>
              {calenderList.map((calender)=>(
                <>
                <div key={calender.id} className='flex flex-row max-sm:gap-2  items-start justify-between'>
                <div className='w-64 max-sm:flex-2'>
                          <h2 className='text-2xl max-sm:text-xs'>{calender.date}</h2>
                </div>
                <div className='w-[30rem]  max-sm:flex-2'>

                    
                    <h2 className={`font-bold max-sm:text-sm  ${calender.id===4 ? "text-xl  max-sm:text-sm max-sm:w-44  w-[28rem]" : "text-xl  max-sm:text-sm "}`}>{calender.title}</h2>
                </div>
                <div className='w-20 max-sm:flex-1'>
                    <button className='text-red-500 text-sm max-sm:text-xs'>Consulter</button>
                </div>
                
          </div>
          {calender.id<4 && <Separator className='w-full mt-4 mb-4 bg-current'/>}
                </>
              ))}
      </div>
  )
}
