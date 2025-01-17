

import { useState, useEffect } from 'react'
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Progress } from "@/components/ui/progress"
import { Hammer, Clock } from 'lucide-react'

export default function MaintenanceComponent() {
  const [progress, setProgress] = useState(0)

  useEffect(() => {
    const timer = setTimeout(() => setProgress(66), 500)
    return () => clearTimeout(timer)
  }, [])

  return (
    <section className='flex flex-col justify-center items-center max-sm:mx-4'>

<Card className="w-full bg-slate-100 mt-12 max-w-md mx-auto">
      <CardHeader className="space-y-1">
        <CardTitle className="text-2xl font-bold text-center">
          <Hammer className="inline-block mr-2 animate-bounce" />
          Page en construction
        </CardTitle>
      </CardHeader>
      <CardContent className="space-y-4">
        <p className="text-center text-muted-foreground">
          Nous travaillons dur pour vous offrir une expérience exceptionnelle.
          Merci de votre patience !
        </p>
        <div className="space-y-2">
          <div className="flex justify-between text-sm">
            <span>Progression</span>
            <span>{progress}%</span>
          </div>
          <Progress value={progress} className="w-full bg-slate-200" />
        </div>
        <div className="flex items-center justify-center text-sm text-muted-foreground">
          <Clock className="mr-2 h-4 w-4" />
          <span>Temps estimé restant : 2 semaines</span>
        </div>
      </CardContent>
    </Card>
    </section>
   
  )
}

