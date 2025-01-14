<?php
/**
 * This file is for backend. If you need front-end translations, use
 * the .json file instead.
 */
return [
    "lang" => "en-US",
    "label" => "English",
    "data" => [
        "please.enable.js" => "Please enable Javascript",
        "error.username.length" => "Username must be between %min and %max characters using only alphanumeric characters (a-z, 0-9, underscores, or dashes).",
        "error.email.length" => "Email must be between %min and %max characters with an @ symbol.",
        "error.password.length" => "Password must be between %min and %max characters using only letters, numbers, or special characters %chars",
        "error.password.should.be.same" => "Password and Confirm Password should be the same.",
        "error.username.taken" => "Username already taken, please choose another.",
        "error.email.exists" => "An account already exists with that email address.",
        "error.session.expired" => "Session expired, please try again.",
        "error.bio.length" => "Bio must be between %min and %max characters.",
        "error.please.fix.errors.below" => "Please fix the errors below.",
        "error.boost.amount" => "Amount must be between %min and %max sats.",
        "error.deposit.amount" => "Amount must be between %min and %max sats.",
        "error.new.password.length" => "New password must be between %min and %max characters.",
        "error.passwords.do.not.match" => "Passwords do not match, please try again.",
        "error.new.password.should.not.match.existing" => "New password should not match your existing password.",
        "error.existing.password.incorrect" => "Existing password is incorrect, please try again.",
        "error.invalid.email" => "Invalid email address.",
        "error.login.incorrect.email.password" => "Incorrect email/password.",
        "error.login.too.fast" => "Too many attempts in a short period of time. Please wait %timeToWait seconds and try again.",
        "error.message.length" => "Message must be between %min and %max characters.",
        "error.offer.pitch.length" => "Pitch must be between %min and %max characters.",
        "error.offer.amount" => "Amount must be between %min and %max sats.",
        "error.post.comment.length" => "Comment must be between %min and %max characters.",
        "error.offer.proposal.amount" => "Amount must be between %min and %max sats.",
        "error.offer.proposal.different" => "Amount should be different from current amount.",
        "error.message.bracket" => "Message cannot begin with the `[` character.",
        "error.post.title.length" => "Title must be between %min and %max characters.",
        "error.post.desc.length" => "Description must be between %min and %max characters.",
        "error.post.amount" => "Amount must be between %min and %max sats.",
        "error.post.zero.or.more.usernames" => "Specify zero or more valid usernames, separated by spaces or commas.",
        "error.does.not.meet.min.account.age.restriction" => "User does not meet minimum account age restriction.",
        "error.does.not.meet.min.review.count.restriction" => "User does not meet minimum review count restriction.",
        "error.does.not.meet.min.review.rating.restriction" => "User does not meet minimum review rating restriction.",
        "error.invalid.minimum.account.age" => "Invalid minimum account age.",
        "error.invalid.minimum.review.count" => "Invalid minimum review count.",
        "error.invalid.minimum.rating" => "Invalid minimum rating.",
        "error.invalid.only.verified.users" => "Invalid onlyVerifiedUsers value.",
        "error.invalid.only.secured.users" => "Invalid onlySecuredUsers value.",
        "error.username.does.not.exist" => "Username `%username` does not exist.",
        "error.password.reset.link.expired" => "Link expired.",
        "error.needs.google.auth" => "Needs Google authentication.",
        "error.needs.email.verify" => "Needs email verification.",
        "error.telegram.username.format" => "Telegram username must begin with @ and be between %min and %max characters.",
        "error.upload.general" => "There was an error processing your file.",
        "error.upload.file.size" => "File should be less than %num MB.",
        "error.upload.picture.general" => "There was an error processing your image.",
        "error.upload.picture.size" => "Image file should be less than %num MB.",
        "error.withdrawal.invoice.format" => "Invoice must start with `ln...` and be between %min and %max characters.",
        "error.google.auth.invalid.code" => "Invalid verification code.",
        "error.service.order.message.length" => "Message must be between %min and %max characters.",
        "error.service.order.amount" => "Amount must be between %min and %max sats.",
        "error.service.package.title.required" => "Package title is required.",
        "error.service.package.title.length" => "Title must be between %min and %max characters.",
        "error.service.package.desc.required" => "Package description is required.",
        "error.service.package.desc.length" => "Description must be between %min and %max characters.",
        "error.service.package.amount" => "Amount must be between %min and %max sats.",
        "error.sec.ques.distinct" => "Please select distinct questions.",
        "error.sec.ques.select" => "You should select a question.",
        "error.sec.ques.answer.length" => "Answer should be between %min and %max alphabetic or numeric characters.",
        "error.sec.ques.existing.pass.incorrect" => "Existing password is incorrect, please try again.",
        "error.feedback.length" => "Feedback must be between %min and %max characters.",
        "error.login.too.many.attempts" => "Too many failed attempts. Please contact support.",
        "error.login.email.already.verified" => "Email has already been verified. Please login.",
        "info.confirm.email.sent" => "Confirmation email has been sent. Please check your email to login.",
        "info.session.possibly.expired" => "Session possibly expired. Attempt to login first.",
        "error.email.already.verified" => "Email has already been verified. Please login.",
        "info.email.verified.successfully" => "Email verified successfully! Please login.",
        "error.invalid.verification.code" => "Invalid verification code specified.",
        "info.logged.out.successfully" => "Logged out successfully.",
        "error.email.not.verified.yet" => "Email not verified yet; cannot reset password.",
        "info.password.reset.link.sent" => "Password reset link been sent. Please check your email.",
        "info.password.reset.successfully" => "Password reset successfully!",
        "error.file.unable.to.upload" => "Unable to upload.",
        "error.file.unable.to.use.file" => "Unable to use file.",
        "info.file.uploaded.successfully" => "File uploaded successfully!",
        "error.must.be.logged.in.to.post" => "Must be logged-in to post.",
        "error.not.own.post.or.offer" => "Not own post or offer, no actions allowed.",
        "error.cannot.make.offer.on.own.post" => "Cannot make an offer on your own post.",
        "error.post.not.active" => "Post is no longer available (not active).",
        "error.post.not.active.one.time" => "Post is no longer available (one-time task with active offer).",
        "error.post.limited.to.users" => "Post is limited to specific users.",
        "error.post.only.for.verified.users" => "Post is only for verified users.",
        "error.post.active.offer.exists" => "Active offer from you already exists.",
        "error.post.completed.by.you" => "Post is no longer available (repeatable unique per user, already completed by you.",
        "error.must.be.logged.in.to.view.offer" => "Must be logged-in view offer details.",
        "error.offer.not.allowed.to.view" => "Not allowed to view this offer.",
        "error.unable.to.retract.has.payment" => "Unable to retract this offer because payment is currently in progress.",
        "error.message.not.signed.correctly" => "Message not signed by specified node correctly.",
        "node.verified.successfully" => "Node verified successfully!",
        "error.node.id.should.be.hex" => "Node ID should be a hex string 66 characters in length.",
        "error.signed.message.between" => "Signed message must be between %min and %max characters.",
        "error.node.already.linked.to.another.user" => "Node already linked to another user.",
        "error.node.capacity.should.be.more.than" => "Node capacity should be more than %min sats.",
        "error.already.gold.security.level" => "Your deposit level is already gold or higher.",
        "error.already.silver.security.level" => "Your deposit level is already silver or higher.",
        "error.already.bronze.security.level" => "Your deposit level is already bronze or higher.",
        "info.offer.cancelled.mutually" => "Offer has been canceled mutually.",
        "info.request.to.cancel.offer.sent" => "A request has been sent to the other party to cancel the offer. If they agree, the funds will immediately be returned to the asker. If they disagree, the offer will be in DISPUTE and begin administrative arbitration. If they do not respond at all within 5 days the funds will automatically be returned to the asker.",
        "info.offer.cancel.retracted" => "Cancel request has been retracted.",
        "info.offer.adjust.retracted" => "Adjustment request has been retracted.",
        "status.payment.required" => "Payment required",
        "error.unable.to.adjust.payment.in.progress" => "Unable to adjust this offer because payment is currently in progress.",
        "info.offer.marked.as.delivered" => "Your offer has been marked as delivered.",
        "info.offer.please.wait.for.confirm" => "Please wait for the asker to confirm receipt, which will release the funds to you.",
        "info.delivery.confirmed.funds.released" => "Delivery confirmed and funds have been released. Please rate the user below!",
        "info.delivery.confirmed.only" => "Delivery confirmed. Please rate the user below!",
        "info.thanks.for.review" => "Thank you for submitting your review!",
        "email.subject.please.verify.your.email" => "Please verify your email address",
        "email.subject.task.received.offer" => "Your task %title has received an offer",
        "email.subject.offer.was.retracted" => "An offer was retracted from your post",
        "email.subject.offer.was.mutually.cancelled" => "An offer was mutually canceled",
        "email.subject.offer.was.automatically.cancelled" => "An offer was automatically canceled",
        "email.subject.request.to.modify.offer" => "A request to modify the offer amount has been made by the other party",
        "email.subject.request.to.cancel.task" => "A request to cancel an in-progress task has been made by the other party",
        "email.subject.automatic.request.to.cancel.task" => "Offer cancellation initiated automatically due to inactivity",
        "email.subject.user.sent.message.regarding.task" => "User %username sent a message regarding the post %title",
        "email.subject.user.sent.direct.message" => "User %username sent a direct message",
        "email.subject.offer.accepted" => "Your offer to %title has been accepted!",
        "email.subject.offer.modification.accepted" => "Your modification to the offer %title has been accepted!",
        "email.subject.offer.modification.declined" => "Your modification to the offer %title has been declined.'",
        "email.subject.offer.declined" => "Your offer to %title has been declined.",
        "email.subject.confirm.work.delivered" => "Please confirm the work has been delivered for %title",
        "email.info.once.confirmed.escrow.released" => "Once you have confirmed it, the funds in escrow will be released.",
        "email.subject.delivery.confirmed" => "Delivery confirmed for %title",
        "email.info.escrow.funds.released" => "The escrow funds are released and can now be withdrawn.",
        "email.subject.new.task.for.category" => "A new task has just been posted for a category you're following: %title",
        "email.subject.user.posted.public.comment" => "User %username posted a public comment regarding the post %title",
        "email.subject.you.have.offers.waiting" => "You have offers that are waiting for your response!",
        "email.subject.password.reset.requested" => "Password reset has been requested",
        "email.subject.withdrawal.address.changed" => "Withdrawal address has been changed",
        "email.subject.password.changed" => "Password has been changed",
        "email.subject.security.questions.changed" => "Security questions have been changed",
        "email.subject.account.deleted" => "Your account has been deleted",
        "email.subject.feedback.left.for.you" => "Feedback and rating has been left for you",
        "email.subject.you.received.a.tip" => "You received a tip from %username!",
        "email.subject.you.received.a.signup.reward" => "You received an affiliate signup reward!",
        "email.subject.you.received.a.task.reward" => "You received an affiliate reward for a completed task!",
        "offer.status.unknown" => "Unknown",
        "offer.status.waiting.for.offers" => "Waiting for offers",
        "offer.status.completed" => "Completed",
        "offer.status.completed.with.feedback" => "Offer completed with feedback",
        "offer.status.submitted" => "Offer submitted",
        "offer.status.cancellation.requested" => "{{alert}} Cancellation requested",
        "offer.status.offer.completed" => "Offer completed",
        "offer.status.awaiting.your.confirmation" => "{{alert}} Awaiting your confirmation",
        "offer.status.waiting.for.their.delivery" => "Waiting for their delivery",
        "offer.status.awaiting.your.response" => "{{alert}} Awaiting your response",
        "offer.status.offer.cancelled" => "Offer canceled",
        "offer.status.offer.work.completed" => "Offer work completed &amp; pending confirmation",
        "offer.status.offer.accepted" => "Offer accepted &amp; pending delivery",
        "offer.status.draft.unlisted" => "Draft (unlisted)",
        "offer.status.deleted" => "Deleted",
        "offer.status.in.dispute" => "{{alert}} In dispute",
        "offer.status.offer.declined" => "Offer declined",
        "offer.status.offer.cancelled.with.feedback" => "Offer canceled with feedback",
        "offer.status.offer.retracted" => "Offer retracted",
        "invoice.description.accept.offer" => "[Microlancer.io] Payment of %amountDue satoshi in accepting the offer from %username for task: %title",
        "invoice.description.boost.service" => "[Microlancer.io] Payment of %invoiceAmount satoshi as a boost to service ID %number by %username",
        "invoice.description.boost.task" => "[Microlancer.io] Payment of %invoiceAmount satoshi as a boost to task ID %number by %username",
        "invoice.description.deposit" => "[Microlancer.io] Payment of %invoiceAmount satoshi as a deposit to account %number by %username",
        "error.posting.invalid" => "Posting invalid (it may have been deleted, expired, or already fulfilled)",
        "error.offer.invalid" => "Offer invalid (it may have been deleted, expired, or already fulfilled)",
        "error.invoice.in.progress" => "Invoice payment already in progress. Please give it some time.",
        "error.unexpected.payment.error" => "Unexpected payment error, please contact support.",
        "info.invoice.paid.from.balance" => "Invoice paid from balance successfully!",
        "info.pay.from.balance.for.boosting.task" => "Pay from balance for boosting task ID %number",
        "info.pay.from.balance.for.boosting.service" => "Pay from balance for boosting service ID %number",
        "info.pay.from.balance.for.security.deposit" => "Pay from balance for security deposit ID %number",
        "error.to.refund.security.deposit.contact.support" => "To get refund for your security deposit, contact Microlancer support.",
        "withdraw.description.default" => "Withdrawal from Microlancer.io",
        "error.invoice.must.be.exactly" => "Invoice amount must be exactly %amount",
        "error.invoice.expired.please.generate" => "Invoice is expired. Please generate a new one and try again.",
        "error.invoice.no.route" => "No route to invoice found. Please try again later, or contact support for help.",
        "info.funds.withdrawn.successfully" => "Funds have been withdrawn successfully!",
        "info.updated.service.successfully" => "Updated service successfully.",
        "error.login.to.create.service" => "Please login to create new service.",
        "error.service.with.id.not.found" => "Service with given ID is not found (it may have been deleted).",
        "error.you.do.not.own.this.service" => "You do not own this service",
        "error.cannot.edit.deleted.service" => "Cannot edit deleted service.",
        "info.service.has.been.deleted" => "Service has been deleted.",
        "error.service.does.not.exist" => "Service does not exist.",
        "info.boost.applies.to.all.packages" => "Boost applies to all packages",
        "info.boost.form.posted.successfully" => "Boost form posted successfully.",
        "error.login.to.place.order" => "Please login to place an order.",
        "error.login.to.create.task" => "Please login to create new task.",
        "error.task.with.id.not.found" => "Task with given ID is not found (it may have been deleted).",
        "error.you.do.not.own.this.task" => "You do not own this task",
        "error.cannot.edit.completed.task" => "Cannot edit completed or deleted task.",
        "error.task.is.restricted.to.users" => "Task is restricted to permitted users only. If you believe you should have access, please let the owner know to add your username to the permitted users list for the task.",
        "info.task.has.been.deleted" => "Task has been deleted.",
        "info.task.closed.successfully" => "Task closed successfully.",
        "info.task.already.closed" => "Task already closed.",
        "error.cannot.close.task.with.active.offers" => "Cannot close task with active offers.",
        "error.cannot.modify.with.offers" => "Cannot modify repeat state or escrow state with offers (create a new task instead).",
        "info.updated.task.successfully" => "Updated task successfully.",
        "error.task.does.not.exist" => "Task does not exist.",
        "error.login.to.see.task" => "Please login to see this task.",
        "error.task.unlisted.by.owner" => "Task has been unlisted by the owner.",
        "info.comment.posted.successfully" => "Comment posted successfully!",
        "time.x.year.ago" => "%num year ago",
        "time.x.years.ago" => "%num years ago",
        "time.x.month.ago" => "%num month ago",
        "time.x.months.ago" => "%num months ago",
        "time.x.week.ago" => "%num week ago",
        "time.x.weeks.ago" => "%num weeks ago",
        "time.x.day.ago" => "%num day ago",
        "time.x.days.ago" => "%num days ago",
        "time.x.hour.ago" => "%num hour ago",
        "time.x.hours.ago" => "%num hours ago",
        "time.x.minute.ago" => "%num minute ago",
        "time.x.minutes.ago" => "%num minutes ago",
        "time.x.second.ago" => "%num second ago",
        "time.x.seconds.ago" => "%num seconds ago",
        "time.just.now" => "just now",
        "post.status.unknown" => "Unknown",
        "post.status.waiting.for.offers" => "Waiting for offers",
        "post.status.completed" => "Completed",
        "post.status.completed.with.feedback" => "Completed with feedback",
        "post.status.waiting.for.their.response" => "Waiting for their response",
        "post.status.cancellation.requested" => "{{alert}} Cancellation requested",
        "post.status.awaiting.your.feedback" => "{{alert}} Awaiting your feedback",
        "post.status.awaiting.your.confirmation" => "{{alert}} Awaiting your confirmation",
        "post.status.waiting.for.their.delivery" => "Waiting for their delivery",
        "post.status.awaiting.your.response" => "{{alert}} Awaiting your response",
        "post.status.cancelled" => "Canceled",
        "post.status.waiting.for.their.confirmation" => "Waiting for their confirmation",
        "post.status.awaiting.your.delivery" => "{{alert}} Awaiting your delivery",
        "post.status.draft" => "Draft (unlisted)",
        "post.status.deleted" => "Deleted",
        "post.status.in.dispute" => "{{alert}} In dispute",
        "post.status.declined" => "Declined",
        "post.status.cancelled" => "Canceled",
        "post.status.retracted" => "Retracted",
    ]
];