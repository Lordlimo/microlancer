<?php
/**
 * This file is for backend. If you need front-end translations, use
 * the .json file instead.
 */
return [
    "lang" => "es-MX",
    "label" => "Español",
    "data" => [
        "please.enable.js" => "Por favor habilite Javascript",
        "error.username.length" => "El nombre de usuario debe tener entre %min y %max caracteres, usando solo caracteres alfanuméricos (a-z, 0-9, guiones bajos o guiones).",
        "error.email.length" => "El correo electrónico debe tener entre %min y %max caracteres con un símbolo @.",
        "error.password.length" => "La contraseña debe tener entre %min y %max caracteres usando solo letras, números o caracteres especiales %chars",
        "error.password.should.be.same" => "Contraseña y Confirmar Contraseña deben ser iguales.",
        "error.username.taken" => "El nombre de usuario ya está en uso, elija otro.",
        "error.email.exists" => "Ya existe una cuenta con esa dirección de correo electrónico.",
        "error.session.expired" => "La sesión ha caducado, inténtalo de nuevo.",
        "error.bio.length" => "La biografía debe tener entre %min y %max caracteres.",
        "error.please.fix.errors.below" => "Por favor arregla los errores de abajo.",
        "error.boost.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.deposit.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.new.password.length" => "La nueva contraseña debe tener entre %min y %max caracteres.",
        "error.passwords.do.not.match" => "Las contraseñas no coinciden, inténtelo de nuevo.",
        "error.new.password.should.not.match.existing" => "La nueva contraseña no debe coincidir con su contraseña actual.",
        "error.existing.password.incorrect" => "La contraseña existente es incorrecta, inténtelo de nuevo.",
        "error.invalid.email" => "Dirección de correo electrónico inválida.",
        "error.login.incorrect.email.password" => "Correo electrónico/contraseña incorrecto.",
        "error.login.too.fast" => "Demasiados intentos en poco tiempo. Por favor espere %timeToWait segundos y vuelva a intentarlo.",
        "error.message.length" => "El mensaje debe tener entre %min y %max caracteres.",
        "error.offer.pitch.length" => "El encabezado debe tener entre %min y %max caracteres.",
        "error.offer.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.post.comment.length" => "El comentario debe tener entre %min y %max caracteres.",
        "error.offer.proposal.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.offer.proposal.different" => "El monto debe ser diferente al monto actual.",
        "error.message.bracket" => "El mensaje no puede comenzar con el caracter `[`.",
        "error.post.title.length" => "El título debe tener entre %min y %max caracteres.",
        "error.post.desc.length" => "La descripción debe tener entre %min y %max caracteres.",
        "error.post.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.post.zero.or.more.usernames" => "Especifique cero o más nombres de usuario válidos, separados por espacios o comas.",
        "error.does.not.meet.min.account.age.restriction" => "El usuario no cumple con la restricción de edad mínima de la cuenta.",
        "error.does.not.meet.min.review.count.restriction" => "El usuario no cumple con la restricción de conteo mínimo de revisión.",
        "error.does.not.meet.min.review.rating.restriction" => "El usuario no cumple con la restricción de calificación mínima de revisión.",
        "error.invalid.minimum.account.age" => "Edad mínima de cuenta no válida.",
        "error.invalid.minimum.review.count" => "Recuento mínimo de reseñas no válido.",
        "error.invalid.minimum.rating" => "Valoración mínima no válida.",
        "error.invalid.only.verified.users" => "Valor de solo usuarios verificados no válido.",
        "error.invalid.only.secured.users" => "Valor de onlySecuredUsers no válido.",
        "error.username.does.not.exist" => "El usuario `%username` no existe.",
        "error.password.reset.link.expired" => "Enlace expirado.",
        "error.needs.google.auth" => "Necesita autenticación de Google.",
        "error.needs.email.verify" => "Necesita verificación por correo electrónico.",
        "error.telegram.username.format" => "El nombre de usuario de Telegram debe comenzar con @ y tener entre %min y %max caracteres.",
        "error.upload.general" => "Hubo un error al procesar su archivo.",
        "error.upload.file.size" => "El archivo debe tener menos de %num MB.",
        "error.upload.picture.general" => "Hubo un error al procesar tu imagen.",
        "error.upload.picture.size" => "El archivo de imagen debe tener menos de %num MB.",
        "error.withdrawal.invoice.format" => "La factura debe comenzar con 'ln ...' y tener entre %min y %max caracteres.",
        "error.google.auth.invalid.code" => "Código de verificación invalido.",
        "error.service.order.message.length" => "El mensaje debe tener entre %min y %max caracteres.",
        "error.service.order.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.service.package.title.required" => "Se requiere el título del paquete.",
        "error.service.package.title.length" => "El título debe tener entre %min y %max caracteres.",
        "error.service.package.desc.required" => "Se requiere la descripción del paquete.",
        "error.service.package.desc.length" => "La descripción debe tener entre %min y %max caracteres.",
        "error.service.package.amount" => "La cantidad debe estar entre %min y %max sats.",
        "error.sec.ques.distinct" => "Seleccione preguntas distintas.",
        "error.sec.ques.select" => "Debes seleccionar una pregunta.",
        "error.sec.ques.answer.length" => "La respuesta debe tener entre %min y %max caracteres alfabéticos o numéricos.",
        "error.sec.ques.existing.pass.incorrect" => "La contraseña existente es incorrecta, inténtelo de nuevo.",
        "error.feedback.length" => "Los comentarios deben tener entre %min y %max caracteres.",
        "error.login.too.many.attempts" => "Demasiados intentos fallidos. Comuníquese con el soporte.",
        "error.login.email.already.verified" => "El correo electrónico ya ha sido verificado. Por favor inicie sesión.",
        "info.confirm.email.sent" => "Confirmation email has been sent. Por favor revise su correo electrónico para iniciar sesión.",
        "info.session.possibly.expired" => "Posiblemente la sesión haya expirado. Intente iniciar sesión primero.",
        "error.email.already.verified" => "El correo electrónico ya ha sido verificado. Por favor inicie sesión.",
        "info.email.verified.successfully" => "¡Correo electrónico verificado correctamente! Por favor inicie sesión.",
        "error.invalid.verification.code" => "Se especificó un código de verificación no válido.",
        "info.logged.out.successfully" => "Se desconectó correctamente.",
        "error.email.not.verified.yet" => "El correo electrónico no verificado aún; no se puede restablecer la contraseña.",
        "info.password.reset.link.sent" => "Se envió el enlace para restablecer la contraseña. Por favor revise su correo electrónico.",
        "info.password.reset.successfully" => "¡La contraseña se restableció correctamente!",
        "error.file.unable.to.upload" => "No se pudo cargar.",
        "error.file.unable.to.use.file" => "No se puede utilizar el archivo.",
        "info.file.uploaded.successfully" => "¡Archivo cargado exitosamente!",
        "error.must.be.logged.in.to.post" => "Debes iniciar sesión para publicar.",
        "error.not.own.post.or.offer" => "No es una publicación propia ni una oferta, no se permiten acciones.",
        "error.cannot.make.offer.on.own.post" => "No puedes hacer una oferta por tu propia publicación.",
        "error.post.not.active" => "La publicación ya no está disponible (no está activa).",
        "error.post.not.active.one.time" => "La publicación ya no está disponible (tarea única con oferta activa).",
        "error.post.limited.to.users" => "La publicación está limitada a usuarios específicos.",
        "error.post.only.for.verified.users" => "La publicación es solo para usuarios verificados.",
        "error.post.active.offer.exists" => "Ya existe una oferta activa suya.",
        "error.post.completed.by.you" => "La publicación ya no está disponible (repetible única por usuario), ya completada por usted.",
        "error.must.be.logged.in.to.view.offer" => "Debe haber iniciado sesión para ver los detalles de la oferta.",
        "error.offer.not.allowed.to.view" => "No se permite ver esta oferta.",
        "error.unable.to.retract.has.payment" => "No se puede retirar esta oferta porque el pago está en curso.",
        "error.message.not.signed.correctly" => "Mensaje no firmado correctamente por el nodo especificado.",
        "node.verified.successfully" => "¡Nodo verificado con éxito!",
        "error.node.id.should.be.hex" => "El ID de nodo debe ser una cadena hexadecimal de 66 caracteres de longitud.",
        "error.signed.message.between" => "El mensaje firmado debe tener entre %min y %max caracteres.",
        "error.node.already.linked.to.another.user" => "Nodo ya vinculado a otro usuario.",
        "error.node.capacity.should.be.more.than" => "La capacidad del nodo debe ser superior a %min sats.",
        "error.already.gold.security.level" => "Su nivel de depósito ya es Gold/Oro o superior.",
        "error.already.silver.security.level" => "Su nivel de depósito ya es Silver/Plata o superior.",
        "error.already.bronze.security.level" => "Su nivel de depósito ya es Bronze/Bronce o superior.",
        "info.offer.cancelled.mutually" => "La oferta se ha cancelado mutuamente.",
        "info.request.to.cancel.offer.sent" => "Se ha enviado una solicitud a la otra parte para cancelar la oferta. Si están de acuerdo, los fondos se devolverán inmediatamente al solicitante. Si no están de acuerdo, la oferta estará en DISPUTA y comenzará el arbitraje administrativo. Si no responden en absoluto dentro de los 5 días, los fondos se devolverán automáticamente al solicitante.",
        "info.offer.cancel.retracted" => "Se ha retirado la solicitud de cancelación.",
        "info.offer.adjust.retracted" => "Se ha retirado la solicitud de ajuste.",
        "status.payment.required" => "Pago requerido",
        "error.unable.to.adjust.payment.in.progress" => "No se puede ajustar esta oferta porque el pago está en curso.",
        "info.offer.marked.as.delivered" => "Su oferta se ha marcado como entregada.",
        "info.offer.please.wait.for.confirm" => "Por favor, espere a que el solicitante confirme la recepción, que le entregará los fondos.",
        "info.delivery.confirmed.funds.released" => "Entrega confirmada y fondos liberados. ¡Califique al usuario a continuación!",
        "info.delivery.confirmed.only" => "Entrega confirmada. ¡Califique al usuario a continuación!",
        "info.thanks.for.review" => "¡Gracias por enviar su reseña!",
        "email.subject.please.verify.your.email" => "Por favor verifique su dirección de correo electrónico",
        "email.subject.task.received.offer" => "Tu tarea %title ha recibido una oferta",
        "email.subject.offer.was.retracted" => "Se retiró una oferta de su publicación",
        "email.subject.offer.was.mutually.cancelled" => "Una oferta fue cancelada mutuamente",
        "email.subject.offer.was.automatically.cancelled" => "Una oferta se canceló automáticamente",
        "email.subject.request.to.modify.offer" => "La otra parte ha realizado una solicitud para modificar el monto de la oferta.",
        "email.subject.request.to.cancel.task" => "La otra parte ha realizado una solicitud para cancelar una tarea en curso.",
        "email.subject.automatic.request.to.cancel.task" => "La cancelación de la oferta se inició automáticamente debido a la inactividad.",
        "email.subject.user.sent.message.regarding.task" => "El usuario %username envió un mensaje sobre la publicación %title",
        "email.subject.user.sent.direct.message" => "El usuario %username envió un mensaje directo",
        "email.subject.offer.accepted" => "¡Se ha aceptado su oferta de %title!",
        "email.subject.offer.modification.accepted" => "¡Su modificación a la oferta %title ha sido aceptada!",
        "email.subject.offer.modification.declined" => "Su modificación a la oferta %title ha sido rechazada.'",
        "email.subject.offer.declined" => "Su oferta en %title ha sido rechazada.",
        "email.subject.confirm.work.delivered" => "Confirma que el trabajo se ha entregado para %title",
        "email.info.once.confirmed.escrow.released" => "Una vez que lo haya confirmado, se liberarán los fondos en garantía.",
        "email.subject.delivery.confirmed" => "Entrega confirmada para %title",
        "email.info.escrow.funds.released" => "Los fondos del depósito en garantía se liberan y ahora se pueden retirar.",
        "email.subject.new.task.for.category" => "Se acaba de publicar una nueva tarea para una categoría que estás siguiendo: %title",
        "email.subject.user.posted.public.comment" => "El usuario %username publicó un comentario público sobre la publicación %title",
        "email.subject.you.have.offers.waiting" => "¡Tienes ofertas esperando tu respuesta!",
        "email.subject.password.reset.requested" => "Se ha solicitado el restablecimiento de la contraseña",
        "email.subject.withdrawal.address.changed" => "Se ha cambiado la dirección de retiro",
        "email.subject.password.changed" => "La contraseña ha sido cambiada",
        "email.subject.security.questions.changed" => "Se han cambiado las preguntas de seguridad.",
        "email.subject.account.deleted" => "Tu cuenta ha sido eliminada",
        "email.subject.feedback.left.for.you" => "Se han dejado comentarios y valoraciones para ti",
        "email.subject.you.received.a.tip" => "¡Recibiste una propina de %username!",
        "email.subject.you.received.a.signup.reward" => "¡Recibiste una recompensa por registrarte como afiliado!",
        "email.subject.you.received.a.task.reward" => "¡Recibiste una recompensa de afiliado por una tarea completada!",
        "offer.status.unknown" => "Desconocido",
        "offer.status.waiting.for.offers" => "Esperando por ofertas",
        "offer.status.completed" => "Completada",
        "offer.status.completed.with.feedback" => "Oferta completada con comentarios",
        "offer.status.submitted" => "Oferta enviada",
        "offer.status.cancellation.requested" => "{{alert}} Cancelación solicitada",
        "offer.status.offer.completed" => "Oferta completada",
        "offer.status.awaiting.your.confirmation" => "{{alert}} Esperando tu confirmacion",
        "offer.status.waiting.for.their.delivery" => "Esperando su entrega",
        "offer.status.awaiting.your.response" => "{{alert}} Esperando tu respuesta",
        "offer.status.offer.cancelled" => "Oferta cancelada",
        "offer.status.offer.work.completed" => "Ofrecer trabajo completado &amp; confirmación pendiente",
        "offer.status.offer.accepted" => "Oferta aceptada &amp; entrega pendiente",
        "offer.status.draft.unlisted" => "Borrador (no listado)",
        "offer.status.deleted" => "Eliminado",
        "offer.status.in.dispute" => "{{alert}} En disputa",
        "offer.status.offer.declined" => "Oferta rechazada",
        "offer.status.offer.cancelled.with.feedback" => "Oferta cancelada con comentarios",
        "offer.status.offer.retracted" => "Oferta retractada",
        "invoice.description.accept.offer" => "[Microlancer.io] Pago de %amountDue satoshi al aceptar la oferta de %username para la tarea: %title",
        "invoice.description.boost.service" => "[Microlancer.io] Pago de %invoiceAmount satoshi como estímulo al ID de servicio %number por %username",
        "invoice.description.boost.task" => "[Microlancer.io] Pago de %invoiceAmount satoshi como estímulo al ID de tarea %number por %username",
        "invoice.description.deposit" => "[Microlancer.io] Pago de %invoiceAmount satoshi como depósito a la cuenta %number por %username",
        "error.posting.invalid" => "Publicación no válida (puede haber sido eliminada, vencida o ya terminada)",
        "error.offer.invalid" => "Oferta no válida (puede haber sido eliminada, vencida o ya terminada)",
        "error.invoice.in.progress" => "Pago de la factura ya en curso. Por favor, dale algo de tiempo.",
        "error.unexpected.payment.error" => "Error de pago inesperado, póngase en contacto con el servicio de asistencia.",
        "info.invoice.paid.from.balance" => "Factura pagada desde el saldo con éxito!",
        "info.pay.from.balance.for.boosting.task" => "Pague del saldo para estimular la tarea con ID %number",
        "info.pay.from.balance.for.boosting.service" => "Pague del saldo para estimular el servicio con ID %number",
        "info.pay.from.balance.for.security.deposit" => "Pagar del saldo del ID del depósito de seguridad %number",
        "error.to.refund.security.deposit.contact.support" => "Para obtener el reembolso de su depósito de seguridad, comuníquese con el soporte de Microlancer.",
        "withdraw.description.default" => "Retiro de Microlancer.io",
        "error.invoice.must.be.exactly" => "El monto de la factura debe ser exactamente %amount",
        "error.invoice.expired.please.generate" => "La factura ha caducado. Genere otra e inténtelo de nuevo.",
        "error.invoice.no.route" => "No se encontró ninguna ruta a la factura. Vuelva a intentarlo más tarde o póngase en contacto con el servicio de asistencia para obtener ayuda.",
        "info.funds.withdrawn.successfully" => "¡Los fondos se han retirado con éxito!",
        "info.updated.service.successfully" => "Servicio actualizado con éxito.",
        "error.login.to.create.service" => "Inicie sesión para crear un nuevo servicio.",
        "error.service.with.id.not.found" => "No se encuentra el servicio con el ID proporcionado (es posible que se haya eliminado).",
        "error.you.do.not.own.this.service" => "No eres propietario de este servicio",
        "error.cannot.edit.deleted.service" => "No se puede editar el servicio eliminado.",
        "info.service.has.been.deleted" => "El servicio ha sido eliminado.",
        "error.service.does.not.exist" => "El servicio no existe.",
        "info.boost.applies.to.all.packages" => "El impulso se aplica a todos los paquetes",
        "info.boost.form.posted.successfully" => "Formulario de impulso publicado con éxito.",
        "error.login.to.place.order" => "Inicie sesión para realizar un pedido.",
        "error.login.to.create.task" => "Inicie sesión para crear una nueva tarea.",
        "error.task.with.id.not.found" => "No se encuentra la tarea con el ID proporcionado (es posible que se haya eliminado).",
        "error.you.do.not.own.this.task" => "No eres dueño de esta tarea",
        "error.cannot.edit.completed.task" => "No se puede editar la tarea completada o eliminada.",
        "error.task.is.restricted.to.users" => "La tarea está restringida solo a usuarios permitidos. Si cree que debería tener acceso, informe al propietario para agregar su nombre de usuario a la lista de usuarios permitidos para la tarea.",
        "info.task.has.been.deleted" => "La tarea ha sido eliminada.",
        "info.task.closed.successfully" => "Tarea cerrada con éxito.",
        "info.task.already.closed" => "Tarea ya cerrada.",
        "error.cannot.close.task.with.active.offers" => "No se puede cerrar la tarea con ofertas activas.",
        "error.cannot.modify.with.offers" => "No se puede modificar el estado de repetición o el estado de depósito en garantía con ofertas (cree una nueva tarea en su lugar).",
        "info.updated.task.successfully" => "Tarea actualizada con éxito.",
        "error.task.does.not.exist" => "La tarea no existe.",
        "error.login.to.see.task" => "Inicie sesión para ver esta tarea.",
        "error.task.unlisted.by.owner" => "El propietario no ha incluido la tarea.",
        "info.comment.posted.successfully" => "¡Comentario publicado con éxito!",
        "time.x.year.ago" => "hace %num año",
        "time.x.years.ago" => "hace %num años",
        "time.x.month.ago" => "hace %num mes",
        "time.x.months.ago" => "hace %num meses",
        "time.x.week.ago" => "hace %num semana",
        "time.x.weeks.ago" => "hace %num semanas",
        "time.x.day.ago" => "hace %num día",
        "time.x.days.ago" => "hace %num días",
        "time.x.hour.ago" => "hace %num hora",
        "time.x.hours.ago" => "hace %num horas",
        "time.x.minute.ago" => "hace %num minuto",
        "time.x.minutes.ago" => "hace %num minutos",
        "time.x.second.ago" => "hace %num segundo",
        "time.x.seconds.ago" => "hace %num segundos",
        "time.just.now" => "justo ahora",
        "post.status.unknown" => "Desconocido",
        "post.status.waiting.for.offers" => "Esperando por ofertas",
        "post.status.completed" => "Completada",
        "post.status.completed.with.feedback" => "Oferta completada con comentarios",
        "post.status.waiting.for.their.response" => "Esperando su respuesta",
        "post.status.cancellation.requested" => "{{alert}} Cancelación solicitada",
        "post.status.awaiting.your.feedback" => "{{alert}} En espera de sus comentarios",
        "post.status.awaiting.your.confirmation" => "{{alert}} Esperando tu confirmacion",
        "post.status.waiting.for.their.delivery" => "Esperando su entrega",
        "post.status.awaiting.your.response" => "{{alert}} Esperando tu respuesta",
        "post.status.cancelled" => "Cancelado",
        "post.status.waiting.for.their.confirmation" => "Esperando su confirmación",
        "post.status.awaiting.your.delivery" => "{{alert}} En espera de su entrega",
        "post.status.draft" => "Borrador (no listado)",
        "post.status.deleted" => "Eliminado",
        "post.status.in.dispute" => "{{alert}} En disputa",
        "post.status.declined" => "Rechazado",
        "post.status.cancelled.with.feedback" => "Cancelado con comentarios",
        "post.status.retracted" => "Retraído",
    ]
];